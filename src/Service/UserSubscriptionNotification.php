<?php

namespace App\Service;

use App\Helpers\Base;
use App\Entity\Setting;
use App\Entity\UserSubscription;
use Doctrine\ORM\EntityManagerInterface;
use BenTools\WebPushBundle\Sender\PushMessageSender;
use BenTools\WebPushBundle\Model\Message\PushNotification;

class UserSubscriptionNotification
{

    protected $sender;
    protected $entityManager;

    protected string $title;
    protected string $settingName;
    protected array $users = [];
    protected array $variables = [];

    public function __construct(PushMessageSender $sender, EntityManagerInterface $entityManager)
    {
        $this->sender = $sender;
        $this->entityManager = $entityManager;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setUsers(array $users): self
    {
        $this->users = $users;
        return $this;
    }

    public function setSettingName(string $settingName): self
    {
        $this->settingName = $settingName;
        return $this;
    }

    public function setVariables(array $variables): self
    {
        $this->variables = $variables;
        return $this;
    }

    public function send()
    {
        if (empty($this->users)) return;
        if (empty($this->title)) throw new \Exception("Le titre de notification est obligatoire");
        if (empty($this->settingName)) throw new \Exception("settingName est obligatoire");

        $settingRepo = $this->entityManager->getRepository(Setting::class);
        $subscriptionRepo = $this->entityManager->getRepository(UserSubscription::class);

        $settingvalue = $settingRepo->get($this->settingName);
        if (empty($settingvalue)) throw new \Exception("setting introuvable ou vide");

        $subscriptions = $subscriptionRepo->createQueryBuilder('s')
            ->innerJoin('s.user', 'u')
            ->where('u IN(:users)')
            ->setParameter('users', $this->users)
            ->getQuery()
            ->getResult();
        
        if (empty($subscriptions)) return;

        $notificationBody = Base::replaceVars($settingvalue, $this->variables, '%', '%');
        $notification = new PushNotification($this->title, [PushNotification::BODY => $notificationBody]);
        $this->sender->push($notification->createMessage(), $subscriptions);
    }
}
