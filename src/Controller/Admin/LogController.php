<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Entity\User;
use App\Service\Table;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use DoctrineExtensions\Query\Mysql\Concat;

class LogController extends BaseController
{

  /**
   * @Route(
   *   methods={"GET"}, 
   *   path="/admin/logs/{entity_name}/{entity_id}", 
   *   name="logs", 
   *   defaults={"entity_name"=null,"entity_id"=null}
   * )
   */
  public function index(Request $request, Table $table, TranslatorInterface $translator, UserInterface $user)
  {
    $entity_name = $request->get('entity_name');
    if ( in_array($entity_name, ['setting', 'category', 'user']) && !$user->isAdmin()  ){
      return $this->json([
      'status' => 'error',
      'message' => $translator->trans("Vous n'avez pas le droit sur cette ressource !")
    ]);
    }
    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $translator->trans("Historique des actions"),
        'body' => $this->renderView('layout/table/render.html.twig', [
          'id' => 'logs',
          'url' => $request->getPathInfo() . '/table',
          'table' => $this->getTable($request, $table)
        ])
      ])
    ]);
  }

  /**
   * @Route(
   *   methods={"GET"}, 
   *   path="/admin/logs/{entity_name}/{entity_id}/table", 
   *   name="logs.table", 
   *   defaults={"entity_name"=null,"entity_id"=null}
   * )
   */
  public function table(Request $request, Table $table)
  {
    return new Response($this->getTable($request, $table));
  }

  private function getTable($request, $table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('uname', 'Utilisateur', ['sortable' => true]);
    $table->addColumn('action_name', 'Action', [
      'sortable' => true,
      'render' => function($entity) {
        $name = $entity['action_name'];
        $badge = Log::getActionBadge($name);
        $label = Log::getActionLabel($name);
        return "<span class='{$badge} d-lg-block'>{$label}</span>";
      }
    ]);
    $table->addColumn('created_at', 'Date', ['sortable' => true]);
    $table->setPrimaryKey('id');
    $table->setOrder('l.created_at', 'desc');
    $query = $this->getTableQuery($request);
    
    return $table->render($query);
  }

  private function getTableQuery($request)
  {
    $entity_id = $request->get('entity_id');
    $entity_name = $request->get('entity_name');
    $logRepo = $this->getDoctrine()->getRepository(Log::class);
    $query = $logRepo->createQueryBuilder('l');
    $query->select("l.id, u.email as uname, l.action_name, l.created_at"); //CONCAT(u.nom, ' ', u.prenom)
    $query->join(User::class, 'u', 'WITH', 'l.user_id = u.id');
    if ($entity_id) {
      $query->andWhere('l.entity_id = :entity_id');
      $query->setParameter('entity_id', $entity_id);
    }
    if ($entity_name) {
      $query->andWhere('l.entity_name = :entity_name');
      $query->setParameter('entity_name', $entity_name);
    }

    return $query;
  }

}
