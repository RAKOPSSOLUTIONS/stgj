<?php
    
namespace App\Controller\Admin;

use App\Service\Table;
use App\Controller\BaseController;
use Cron\CronBundle\Entity\CronJob;
use Cron\CronBundle\Entity\CronReport;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class CronJobsController extends BaseController
{

  /**
   * @Route(methods={"GET"}, path="/admin/cronjobs", name="cronjobs")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Table $table)
  {
    return $this->render('admin/cronjobs/index.html.twig', [
      'table' => $this->getTable($table)
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/cronjobs/{id}/change-status", name="cronjobs.change_status")
   * @IsGranted("ROLE_ADMIN")
   */
  public function changeStatus(Request $request)
  {
    $id = $request->get('id', 0);
    $em = $this->getDoctrine()->getManager();
    $cron = $em->getRepository(CronJob::class)->find($id);
    if ($cron) {
      $cron->setEnabled(!$cron->getEnabled());
      $em->persist($cron);
      $em->flush();
    }

    return $this->json([
      'tableId' => 'cronjobs',
      'status'  => 'success',
      'message' => 'L\'état a bien été changé'
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/cronjobs/table", name="cronjobs.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Table $table)
  {
    return new Response($this->getTable($table));
  }

  private function getTable($table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('description', 'Description');
    $table->addColumn('command', 'Commande');
    $table->addColumn('schedule', 'Expression');
    $table->addColumn('enabled', 'État', [
      'sortable' => true,
      'render' => function($entity) {
        if ($entity['enabled']) {
          $status = 'Activé';
          $class = 'bg-success';
        } else {
          $status = 'Désactivé';
          $class = 'bg-danger';
        }
        return "<span class='badge rounded-pill {$class}'>{$status}</span>";
      }
    ]);
    $table->addColumn('runAt', 'Dernière exécution');
    $table->addColumn('runTime', 'Durée', [
      'sortable' => true,
      'render' => function($entity) {
        if ($entity['runTime']) {
          return round($entity['runTime'], 2);
        }
      }
    ]);

    $table->setPrimaryKey('id');
    $table->setOrder('c.description', 'asc');

    $table->addAction('activer', [
      'type'  => 'modal',
      'route' => '/admin/cronjobs/[id]/change-status',
      'icon' => 'bi-check-circle',
      'label' => 'Activer',
      'confirm' => true,
      'display' => function($entity) {
        return !$entity['enabled'];
      }
    ]);
    $table->addAction('desactiver', [
      'type'  => 'modal',
      'route' => '/admin/cronjobs/[id]/change-status',
      'icon' => 'bi-x-circle',
      'label' => 'Désactiver',
      'confirm' => true,
      'display' => function($entity) {
        return $entity['enabled'];
      }
    ]);

    $query = $this->getTableQuery();

    return $table->render($query);
  }

  private function getTableQuery()
  {
    $em = $this->getDoctrine()->getManager();
    $mailRepo = $em->getRepository(CronJob::class);
    $reportRepo = $em->getRepository(CronReport::class);

    $subQuery = $reportRepo->createQueryBuilder('r1')
        ->select('MAX(r1.id)')
        ->where('r1.job = c');

    $query = $mailRepo->createQueryBuilder('c');
    $query->select('c.id, c.description, c.command, c.schedule, c.enabled, r2.runAt, r2.runTime');
    $query->leftJoin(CronReport::class, 'r2', 'WITH', $subQuery->expr()->eq('r2.id', '('. $subQuery->getDQL() .')'));

    return $query;
  }

}
