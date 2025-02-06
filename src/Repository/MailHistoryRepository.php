<?php

namespace App\Repository;

use DateTime;
use App\Helpers\Base;
use App\Entity\MailHistory;
use Symfony\Component\Mime\Email;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method MailHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method MailHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method MailHistory[]    findAll()
 * @method MailHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MailHistoryRepository extends ServiceEntityRepository
{

  private $mailer;
  private $container;

  public function __construct(ManagerRegistry $registry, ContainerInterface $container, MailerInterface $mailer)
  {
    $this->mailer = $mailer;
    $this->container = $container;
    parent::__construct($registry, MailHistory::class);
  }

  public function log(array $params = [])
  {
    $params = array_merge([
      'user_id'     => 0,
      'template'    => null,
      'sender'      => $this->container->getParameter('mail.sender'),
      'reply_to'    => $this->container->getParameter('mail.replyTo'),
      'receiver'    => null,
      'subject'     => null,
      'cc'          => [],
      'attachments' => [],
      'variables'   => [],
      'send_immediately' => false
    ], $params);

    if (
      empty($params['template']) ||
      empty($params['receiver']) ||
      empty($params['subject'])
    ) return;

    $entity = new MailHistory();
    $entity->setTemplate($params['template']);
    $entity->setSender($params['sender']);
    $entity->setReplyTo($params['reply_to']);
    $entity->setReceiver($params['receiver']);
    $entity->setSubject($params['subject']);
    $entity->setCc($params['cc']);
    $entity->setAttachments($params['attachments']);
    $entity->setVariables($params['variables']);
    $entity->setCreatedAt(new DateTime('now'));
    $entity->setCreatedBy($params['user_id']);

    $em = $this->getEntityManager();
    $em->persist($entity);
    $em->flush();

    // send email immediately
    if ($params['send_immediately']) {
      $this->sendEmail($entity);
    }

    return $entity;
  }

  public function sendEmail(MailHistory $entity)
  {
    $em = $this->getEntityManager();
    try {
      $variables = $entity->getVariables();
      $uploadDir = $this->container->getParameter('kernel.project_dir') . '/public/uploads/';
      if (
        isset($variables['entity_id']) && intval($variables['entity_id']) > 0 &&
        isset($variables['entity_name']) && !empty($variables['entity_name'])
      ) {
        $repoClass = '\App\Entity\\' . Base::dashesToCamelCase($variables['entity_name']);
        $variables['entity'] = $em->getRepository($repoClass)->find($variables['entity_id']);
      }
      $email = (new TemplatedEmail())
        ->from($entity->getSender())
        ->to($entity->getReceiver())
        ->replyTo($entity->getReplyTo())
        ->priority(Email::PRIORITY_HIGH)
        ->subject($entity->getSubject())
        ->htmlTemplate('emails/' . $entity->getTemplate() . '.html.twig')
        ->context($variables);

      foreach ($entity->getCc() as $cc) {
        $email->addCc($cc);
      }

      foreach ($entity->getAttachments() as $attachment) {
        $path = $uploadDir . $attachment['path'];
        if (file_exists($path)) {
          $email->attachFromPath($path, $attachment['name']);
        }
      }

      $this->mailer->send($email);
      if (empty($entity->getSentAt())) {
        $entity->setSentAt(new DateTime('now'));
      } else {
        $entity->setResendCount($entity->getResendCount() + 1);
      }
      $entity->setStatus('sent');
    } catch (TransportExceptionInterface $e) {
      $entity->setStatus('failed');
    }
    $em->persist($entity);
    $em->flush();
  }
}
