<?php

namespace App\Repository;

use App\Entity\Societe;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Societe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Societe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Societe[]    findAll()
 * @method Societe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SocieteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry, Security $security)
    {
        $this->security = $security;
        parent::__construct($registry, Societe::class);
    }

    public function getCount()
    {
        return $this->createQueryBuilder('s')
            ->select('COUNT(s.id)')
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findById($user, $societe_id)
    {
        $qb = $this->createQueryBuilder('s');
        $qb->where('s.id = :societe_id');
        $qb->setParameter('societe_id', $societe_id);
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('s.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }
        $qb->setMaxResults(1);
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function findByName($name)
    {
       
        $qb = $this->createQueryBuilder('s');
        $qb->where('s.name = :name');
        $qb->setParameter('name', $name);
        $qb->setMaxResults(1);
        
        return $qb->getQuery()->getOneOrNullResult();
    }

}
