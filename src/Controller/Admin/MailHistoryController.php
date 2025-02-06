<?php
    
namespace App\Controller\Admin;

use App\Entity\Log;
use App\Helpers\Base;
use App\Service\Table;
use App\Entity\MailHistory;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class MailHistoryController extends BaseController
{

  /**
   * @Route(methods={"GET"}, path="/admin/mail/history", name="mail.history")
   * @IsGranted("ROLE_ADMIN")
   */
  public function index(Table $table)
  {
    return $this->render('admin/mail-history/index.html.twig', [
      'table' => $this->getTable($table)
    ]);
  }

  /**
   * @Route(methods={"GET", "POST"}, path="/admin/mail/history/{id}/resend", name="mail.history.resend")
   * @IsGranted("ROLE_ADMIN")
   */
  public function resend(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $em = $this->getDoctrine()->getManager();
    $items = $request->get('items', [$request->get('id', 0)]);
    $mailRepo = $em->getRepository(MailHistory::class);
    $emails = $mailRepo->findBy(['id' => $items]);

    foreach($emails as $email) {
      $mailRepo->sendEmail($email);
      $em->getRepository(Log::class)->store($user->getId(), $email->getId(), 'mail_history', 'resent');
    }

    if (count($items) > 1) {
      $message = $translator->trans("Les emails ont été rénvoyés");
    } else {
      $message = $translator->trans("L'email a bien été rénvoyé");
    }

    return $this->json(['status' => 'success', 'tableId' => 'mail-history', 'message' => $message]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/mail/history/{id}/show", name="mail.history.show")
   * @IsGranted("ROLE_ADMIN")
   */
  public function show(Request $request, UserInterface $user, TranslatorInterface $translator)
  {
    $id = $request->get('id');
    $em = $this->getDoctrine()->getManager();
    $entity = $em->getRepository(MailHistory::class)->find($id);
    if (!$entity) {
      $this->addFlash('error', $translator->trans("Impossible de trouver l'email"));
      return $this->redirect($this->generateUrl('mail.history'));
    }

    $variables = $entity->getVariables();
    if (
      isset($variables['entity_id']) && intval($variables['entity_id']) > 0 &&
      isset($variables['entity_name']) && !empty($variables['entity_name'])
    ) {
      $repoClass = '\App\Entity\\' . Base::dashesToCamelCase($variables['entity_name']);
      $variables['entity'] = $em->getRepository($repoClass)->find($variables['entity_id']);
    }

    return $this->json([
      'content' => $this->renderView('layout/modal/index.html.twig', [
        'title' => $entity->getSubject(),
        'body' => $this->renderView('emails/' . $entity->getTemplate() . '.html.twig', $variables)
      ])
    ]);
  }

  /**
   * @Route(methods={"GET"}, path="/admin/mail/history/table", name="mail.history.table")
   * @IsGranted("ROLE_ADMIN")
   */
  public function table(Table $table)
  {
    return new Response($this->getTable($table));
  }

  private function getTable($table)
  {
    $table->addColumn('increment', '#');
    $table->addColumn('subject', 'Sujet', ['sortable' => true]);
    $table->addColumn('template', 'Template', [
      'sortable' => true,
      'render' => function($entity) {
        return "<span class='badge rounded-pill bg-primary'>{$entity->getTemplate()}</span>";
      }
    ]);
    $table->addColumn('receiver', 'Destinataire', ['sortable' => true]);
    $table->addColumn('cc', 'CC', [
      'sortable' => true,
      'render' => function($entity) {
        $cc = $entity->getCc();
        if (empty($cc)) {
          return '<span class="badge rounded-pill bg-secondary">0<span>';
        }
        $content = '';
        foreach($cc as $email) {
          $content .= "<div>{$email}</div>";
        }
        return '<span class="badge rounded-pill bg-success" role="button" tabindex="0" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="'. htmlentities($content) .'" data-bs-html="true">'. count($cc) .'<span>';
      }
    ]);
    $table->addColumn('attachments', 'PJ', [
      'sortable' => true,
      'render' => function($entity) {
        $attachments = $entity->getAttachments();
        $count = count($attachments);
        if (empty($attachments)) {
          return '<span class="badge rounded-pill bg-secondary">'. $count .'<span>';
        }
        $content = '<ul class="list-unstyled m-0 p-0">';
        foreach($attachments as $attachment) {
          if (isset($attachment['path'])) {
            $content .= '<li><a href="/uploads/'. $attachment['path'] .'" target="_blank" class="text-decoration-none text-dark"><i class="'. Base::getFileIcon($attachment['path']) .'"></i>&nbsp;'. $attachment['name'] .'</a></li>';
          }
        }
        $content .= '</ul>';
        return '<span class="badge rounded-pill bg-success" role="button" tabindex="0" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-content="'. htmlentities($content) .'" data-bs-html="true">'. $count .'<span>';
      }
    ]);
    $table->addColumn('status', 'État', [
      'sortable' => true,
      'render' => function($entity) {
        $status = MailHistory::STATUS[$entity->getStatus()];
        return "<span class='badge rounded-pill bg-dark' style='background-color: {$status['color']} !important;'>{$status['label']}</span>";
      }
    ]);
    $table->addColumn('resend_count', 'Renvoi', [
      'sortable' => true,
      'render' => function($entity) {
        $count = $entity->getResendCount();
        $bgColor = $count > 0 ? 'warning' : 'dark';
        return "<span class='badge rounded-pill bg-{$bgColor}'>{$count}<span>";
      }
    ]);
    $table->addColumn('sent_at', 'Date d\'envoi', ['sortable' => true]);
    $table->setPrimaryKey('id');
    $table->setOrder('m.created_at', 'desc');

    $table->addAction('resend', [
      'type'  => 'modal',
      'label' => 'Renvoyer',
      'icon'  => 'bi bi-arrow-repeat',
      'route' => function($entity) {
        $id = $entity ? $entity->getId() : 0;
        return "/admin/mail/history/{$id}/resend";
      },
      'bulk_action' => true
    ]);
    $table->addAction('show', [
      'type'  => 'modal',
      'label' => 'Afficher',
      'icon'  => 'bi bi-eye',
      'route' => '/admin/mail/history/[id]/show'
    ]);
    $table->addAction('logs', [
      'type'  => 'modal',
      'label' => 'Historique',
      'icon'  => 'bi bi-clock-history',
      'route' => '/admin/logs/mail_history/[id]'
    ]);

    $query = $this->getTableQuery();

    return $table->render($query);
  }

  private function getTableQuery()
  {
    $mailRepo = $this->getDoctrine()->getRepository(MailHistory::class);
    $query = $mailRepo->createQueryBuilder('m');

    return $query;
  }

}
