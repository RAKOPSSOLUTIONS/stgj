<?php
// php bin/console link:check
// At 07:00 on every day: 0 9 * * *

namespace App\Command;

use App\Entity\Link;
use App\Entity\Log;
use App\Entity\Media;
use Doctrine\ORM\EntityManagerInterface;
use App\Service\UserSubscriptionNotification;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use BenTools\WebPushBundle\Sender\PushMessageSender;
use Symfony\Component\Console\Output\OutputInterface;
use BenTools\WebPushBundle\Model\Subscription\UserSubscriptionManagerRegistry;

class LinkCommand extends Command
{

  protected $router;
  protected $notification;
  protected $entityManager;
  protected static $defaultName = 'link:check';

  public function __construct(
    EntityManagerInterface $entityManager,
    UserSubscriptionManagerRegistry $userSubscriptionManager,
    PushMessageSender $sender,
    UserSubscriptionNotification $notification
  ) {
    $this->notification = $notification;
    $this->entityManager = $entityManager;
    $this->userSubscriptionManager = $userSubscriptionManager;
    $this->sender = $sender;

    parent::__construct();
  }

  protected function configure()
  {
    $this->setDescription("check & update links");
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $links = $this->entityManager->getRepository(Link::class)->findAll();

    //$links = $this->entityManager->getRepository(Link::class)->findBy(['mediaId' => 75]);

    //$medias = $this->entityManager->getRepository(Media::class)->findAll();


    $medias = [];
      foreach ($links as $entity) {
        //$log = $this->entityManager->getRepository(Log::class)->findOneBy(['entity_id'=> $entity->getId(), 'entity_name' => 'link'], ['created_at' => 'DESC']);

        $domain = $entity->getDomain();

        if ( !empty($domain) && !in_array($domain, ['twitter.com', 'facebook.com']) ){
          echo "UPDATE link set media_id = (SELECT id FROM media WHERE domain = '$domain' and parent_id IS NULL ORDER BY id LIMIT 1) WHERE media.domain = link.domain;". PHP_EOL;
        }

        

       /* $media = $entity->getMedia();
        if ( $media ){
          //$entity->setPublishedOn($log->getCreatedAt());
          //$entity->setPublishedOn(new \DateTime());
          $domain = $entity->getDomain();

          $social_media = ['twitter.com', 'facebook.com', ''];

          if ( !empty($domain) &&  !in_array($domain, $social_media) ){
            if ( !array_key_exists($domain, $medias) ){
              $medias[$domain] = [];
            }
            if ( !in_array($media->getId(), $medias[$domain]) ) $medias[$domain][] = $media->getId();
          }
          
          //$domain =  $entity->extractDomain();
          //$entity->setDomain( $domain );
          //$media->setDomain( $entity->getDomain() );
         // $this->entityManager->persist($media);
          //$this->entityManager->persist($entity);
          //$this->entityManager->flush();

          //$output->writeln($domain);
          //$output->writeln('created on ' . $log->getCreatedAt()->format('Y-m-d H:m:i'));
          //$output->writeln('published on updated for ' . $entity->getId());
          //$output->writeln('updated created on ' . $entity->getPublishedOn()->format('Y-m-d H:m:i'));
          //exit;
        }*/
        
        
      }
      foreach ($medias as $key => $value) {

         if ( count($value) > 1 ){
           $parent_id = $value[0];
           //echo "UPDATE media SET parent_id = $parent_id WHERE domaine = '$key';".PHP_EOL;
           //$q = $this->entityManager->createQuery('update Media m set m.parent_id = '.$parent_id);
           //$numUpdated = $q->execute();
           //print_r($value);
         }
      }
 
    $output->writeln('OK');
    return Command::SUCCESS;
  }
}
