<?php

namespace App\Repository;

use App\Entity\Log;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Log|null find($id, $lockMode = null, $lockVersion = null)
 * @method Log|null findOneBy(array $criteria, array $orderBy = null)
 * @method Log[]    findAll()
 * @method Log[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Log::class);
    }

    public function store($user_id, $entity_id, $entity_name, $action_name)
    {
        $log = new Log();
        $log->setUserId($user_id);
        $log->setEntityId($entity_id);
        $log->setEntityName($entity_name);
        $log->setActionName($action_name);
        $log->setCreatedAt(new \Datetime('now'));
        $em = $this->getEntityManager();
        $em->persist($log);
        $em->flush();
    }

}
