<?php
namespace App\Service;

use App\Helpers\Base;
use Twig\Environment;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Component\HttpFoundation\RequestStack;

class Table {

  private $twig;
  private $request;
  private $primaryKey;
  private $page;
  private $perpage;
  private $perpages = [5, 10, 15, 20, 50, 100];
  private $orderby;
  private $order = 'asc';
  private $columns = [];
  private $actions = [];
  private $increment = null;
  private $show_all = false;
  private $date_format = 'd.m.Y';
  private $datetime_format = 'd.m.Y H:i';

  public function __construct(Environment $twig, RequestStack $requestStack)
  {
    $this->twig = $twig;
    $this->request = $requestStack->getCurrentRequest();
    $this->page = $this->request->query->getInt('page', 1);
    //change 218labs
    $per_page = in_array($this->request->query->get('format'), ['xlsx', 'pdf']) ? 2000 : 10;
    $this->perpage = $this->request->query->getInt('perpage', $per_page);
    if ($orderby = $this->request->query->get('orderby', false)) {
      $this->orderby = $orderby;
    }
    if ($order = $this->request->query->get('order', false)) {
      $this->order = $order;
    }
  }

  public function render($query)
  {
    return $this->twig->render('layout/table/index.html.twig', [
      'data' => $this->toArray($query)
    ]);
  }

  public function export($query, $filename, $format = 'xlsx')
  {
    $data = $this->toArray($query);

    $rows[] = array_map(function($d) {
      return $d['label'];
    }, $data['columns']);

    foreach($data['rows'] as $row) {
      $rows[] = array_map(function($d) use ($row) {
        return strip_tags($row[$d['name']]);
      }, $data['columns']);
    }

    if ($format == 'pdf') {
      return Base::arrayToPDF($rows, $filename, true);
    } else {
      return Base::arrayToExcel($rows, $filename, true);
    }
  }

  public function toArray($query): array
  {
    if (!empty($this->orderby) && in_array($this->order, ['asc', 'desc'])) {
      $query->addOrderBy($this->orderby, $this->order);
    }

    if ($query instanceof QueryBuilder) {
      $queryClone = clone $query;
      $row = $queryClone->addSelect('COUNT(*) as count_items')->execute()->fetchAssociative();
      $count = isset($row['count_items']) ? $row['count_items'] : 0;
    }

    $offset = ($this->page - 1) * $this->perpage;
    if (!$this->getShowAll()) {
      $query->setFirstResult($offset);
      $query->setMaxResults($this->perpage);
    }

    if ($query instanceof QueryBuilder) {
      $paginator = $query->execute()->fetchAllAssociative();
    } else {
      $paginator = new Paginator($query);
      $paginator->setUseOutputWalkers(false);
      $count = $paginator->count();
    }

    $pages = ceil($count / $this->perpage);

    $data = [
      'count'    => $count,
      'page'     => $this->page,
      'perpage'  => $this->perpage,
      'perpages' => $this->perpages,
      'pages'    => intval($pages) ?: 1,
      'offset'   => $offset,
      'columns'  => [],
      'rows'     => [],
      'has_actions' => false,
      'bulk_actions' => $this->getBulkActions()
    ];

    // add table columns
    $i = 0;
    $columnsList = $this->getColumns();
    $actionsList = $this->getActions();
    foreach($columnsList as $colname => $column) {
      if ($colname == 'increment' && !empty($data['bulk_actions'])) continue;
      $data['columns'][$i] = [
        'name'     => $colname,
        'label'    => $column['label'],
        'sortable' => $column['params']['sortable']
      ];
      $i++;
    }

    foreach($paginator as $loopIndex => $item) {
      // add rows
      $data['rows'][$loopIndex]['pkv'] = $this->getPrimaryKeyValue($item);
      foreach($data['columns'] as $column) {
        $colname = $column['name'];
        if (!empty($columnsList[$colname]['params']['render'])) {
          $text = $this->exec($columnsList[$colname]['params']['render'], $item);
        } else if ($colname == 'increment') {
          $text = $this->getIncrement();
        } else {
          $text = $this->getAttribute($colname, $item);
        }
        $data['rows'][$loopIndex][$colname] = $text;
        $data['rows'][$loopIndex]['actions'] = [];
      }
      // add actions
      foreach($actionsList as $action) {
        if (!$this->exec($action['display'], $item)) continue;
        $data['has_actions'] = true;
        $data['rows'][$loopIndex]['actions'][] = [
          'name'  => $action['name'],
          'type'  => $action['type'],
          'label' => $action['label'],
          'icon'  => $action['icon'],
          'attrs'  => $action['attrs'],
          'confirm' => $action['confirm'],
          'modal_message' => $action['modal_message'],
          'path'  => $this->getActionUrl($action, $item)
        ];
      }
    }

    return $data;
  }

  public function addColumn($name, $label, $params = [])
  {
    $params = array_replace_recursive([
      'render'   => null,
      'display'  => true,
      'sortable' => false
    ], $params);

    if (!$this->exec($params['display'])) return;

    $this->columns[$name] = [
      'name'   => $name,
      'label'  => $label,
      'params' => $params
    ];
  }

  public function addAction($name, $args = [])
  {
    $isDeleteAction = $name == 'delete';
    $args = array_replace_recursive([
      'name' => $name,
      'parent_name' => false,
      'type' => 'link',
      'label' => 'No name',
      'icon' => 'bi bi-circle',
      'route' => '#',
      'attrs' => [],
      'childrens' => [],
      'display' => true,
      'confirm' => $isDeleteAction,
      'bulk_action' => false,
      'bulk_action_label' => null,
      'modal_message' => $isDeleteAction ? 'Suppression en cours...' : '',
      'order' => count($this->actions) + 1
    ], $args);

    if ($this->exec($args['parent_name'])) {
      $this->actions[$args['parent_name']]['childrens'][$name] = $args;     
    } else {
      $this->actions[$name] = $args;
    }

    return $this;
  }

  public function addDivider($args = [])
  {
    $args['type'] = 'divider';
    return $this->addAction('divider_' . count($this->actions), $args);
  }

  public function setActionAttribute($name, $attribute, $value)
  {
    $this->actions[$name][$attribute] = $value;
  }

  public function setPrimaryKey($primaryKey): self
  {
    $this->primaryKey = $primaryKey;

    return $this;
  }

  public function getPrimaryKey(): string
  {
    if (!empty($this->primaryKey)) {
      return $this->primaryKey;
    }

    $column = reset($this->columns);
    if (!isset($column['name'])) {
      return $this->primaryKey;
    }

    if ($column['name'] == 'increment') {
      $second = array_slice($this->columns, 1, 1, true);
      $column = reset($second);
      $this->primaryKey = $column['name'];
    } else {
      $this->primaryKey = $column['name'];
    }

    return $this->primaryKey;
  }

  public function getPrimaryKeyValue($item)
  {
    $pk = $this->getPrimaryKey();
    if (is_array($item)) {
      return isset($item[$pk]) ? $item[$pk] : null;
    }
    $getter = 'get'. Base::dashesToCamelCase($pk);

    return $item->$getter();
  }

  public function getBulkActions()
  {
    $bulk_actions = [];
    foreach ($this->actions as $action) {
      if ($this->exec($action['bulk_action'])) {
        $bulk_actions[] = [
          "name"  => $action['name'],
          "label" => $action['bulk_action_label'] ?: $action['label'],
          "path"  => $this->getActionUrl($action)
        ];
      }
    }
    return $bulk_actions;
  }

  public function setOrder($orderby, $order = 'ASC')
  {
    $this->orderby = $orderby;
    $this->order = \strtolower($order);

    return $this;
  }

  public function getPage()
  {
    return $this->page;
  }

  public function setPage($page)
  {
    if (is_numeric($page)) {
      $this->page = $page;
    }
    return $this;
  }

  public function getPerpages()
  {
    return $this->perpages;
  }

  public function getPerpage()
  {
    return $this->perpage;
  }

  public function setPerpage($perpage)
  {
    if (is_numeric($perpage)) {
      $this->perpage = $perpage;
    }
    return $this;
  }

  public function getShowAll(): bool
  {
    return $this->show_all;
  }

  public function setShowAll(bool $show_all): self
  {
    $this->show_all = $show_all;

    return $this;
  }

  public function getDateFormat()
  {
    return $this->date_format;
  }

  public function setDateFormat($date_format)
  {
    $this->date_format = $date_format;

    return $this;
  }

  public function getDateTimeFormat()
  {
    return $this->datetime_format;
  }

  public function setDateTimeFormat($datetime_format)
  {
    $this->datetime_format = $datetime_format;

    return $this;
  }

  public function getColumns()
  {
    return $this->columns;
  }

  public function getActions()
  {
    return $this->actions;
  }

  public function getIncrement()
  {
    $page = $this->getPage();
    $perpage = $this->getPerpage();
    if(is_null($this->increment)) {
      $this->increment = (($perpage * $page) - $perpage) + 1;
    } else {
      $this->increment += 1;
    }
    return $this->increment;
  }

  private function getGetter($string)
  {
    return 'get' . Base::dashesToCamelCase($string);
  }

  public function decode($json, $default = [])
  {
    return json_decode($json, true) ?: $default;
  }

  public function exec($closure, $entity = null)
  {
    if (is_callable($closure)) {
      return call_user_func($closure, $entity);
    }
    return $closure;
  }

  public function getAttribute($attribute, $entity)
  {
    if (!$entity) {
      return '';
    }
    $attribute = ltrim($attribute, '[');
    $attribute = rtrim($attribute, ']');
    $parts = explode('.', $attribute);
    if (count($parts) > 1) {
      $relation = $this->getGetter($parts[0]);
      if (method_exists($entity, $relation) && $entity->$relation()) {
        $getter = $this->getGetter($parts[1]);
        if (method_exists($entity->$relation(), $getter)) {
          return $entity->$relation()->$getter();
        }
      }
      return '';
    } else if (is_array($entity)) {
      if (isset($entity[$attribute])) {
        if ($entity[$attribute] instanceof \DateTime) {
          return $entity[$attribute]->format($this->getDateTimeFormat());
        } else {
          return $entity[$attribute];
        }
      } else {
        return null;
      }
    } else {
      $getter = $this->getGetter($attribute);
      if (!method_exists($entity, $getter)) {
        return '';
      }
      if ($entity->$getter() instanceof \DateTime) {
        return $entity->$getter()->format($this->getDateTimeFormat());
      }
      return $entity->$getter();
    }
  }

  public function getActionUrl($action, $entity = null)
  {
    $url = 'javascript:void(0)';

    if (!isset($action['route']) || $action['route'] == '#') return $url;

    if (is_callable($action['route'])) {
      $url = $this->exec($action['route'], $entity);
    } else if (isset($action['route']['name'])) {
      $route_args = [];
      if (isset($action['route']['args'])) {
        $route_args = $this->replaceVars($action['route']['args'], $entity);
      }
      $url = $this->generator->generate($this->replaceVars($action['route']['name'], $entity), $route_args);
    } else if (is_string($action['route'])) {
      $url = $this->replaceVars($action['route'], $entity);
    }

    return $url;
  }

  public function replaceVars($input, $entity, $htmlentities = true)
  {
    if (is_array($input)) {
      foreach ($input as $k => $v) {
        $input[$k] = preg_replace_callback('/\[[a-z_.]+\]/', function($m) use ($entity) {
          if (isset($m[0])) {
            return $this->getAttribute($m[0], $entity);
          }
        }, $v);
      }
    } else {
      $input = preg_replace_callback('/route\[(.*)\]/', function($m) use ($entity) {
        if (isset($m[1])) {
          $route_name = '';
          $route_params = [];
          $parts = explode('|', $m[1]);
          foreach ($parts as $part) {
            $param = explode('=', $part);
            if ($param[0] == 'name') {
              $route_name = $param[1];
            } else if ($param[0] == 'params') {
              $paramsStr = $this->replaceVars($param[1], $entity);
              foreach (explode(',', $paramsStr) as $value) {
                $vParts = explode(':', $value);
                $route_params[$vParts[0]] = $vParts[1];                
              }
            }
          }
          if (!empty($route_name)) {
            return $this->generator->generate($route_name, $route_params);
          }
          return $m[1];
        }
      }, $input);

      $input = preg_replace_callback('/\[[a-z_.]+\]/', function($m) use ($entity) {
        if (isset($m[0])) {
          return $this->getAttribute($m[0], $entity);
        }
      }, $input);

      $input = preg_replace_callback('/trans\[(.*)\]/', function($m) use ($entity) {
        if (isset($m[1])) {
          return $this->trans->trans($m[1]);
        }
      }, $input);

      if ($htmlentities) {
        $input = htmlentities($input);
      }
    }
    return $input;
  }

} // END Class