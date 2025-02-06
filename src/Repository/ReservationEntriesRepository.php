<?php

namespace App\Repository;

use App\Entity\ReservationEntries;
use App\Entity\Link;
use App\Entity\Media;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\ReservationEntriesRepository;
use Symfony\Component\Security\Core\Security;


/**
 * @extends ServiceEntityRepository<ReservationEntries>
 *
 * @method ReservationEntries|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationEntries|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationEntries[]    findAll()
 * @method ReservationEntries[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationEntriesRepository extends ServiceEntityRepository
{
    public function __construct(
        ManagerRegistry $registry, 
        Security $security
    ) {
        $this->security = $security;
        parent::__construct($registry, ReservationEntries::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(ReservationEntries $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(ReservationEntries $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findById($user, $reservation_id)
    {
        $qb = $this->createQueryBuilder('r');
        $qb->where('r.id = :reservation_id');
        $qb->setParameter('reservation_id', $reservation_id);
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('r.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }
        $qb->setMaxResults(1);
        
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function findEntry($user_id, $trajet_id, $date)
    {
        $qb = $this->createQueryBuilder('re');
        if ( intval($user_id) > 0 ){
          $qb->where('re.id = :user_id');
          $qb->setParameter('user_id', $user_id);  
        }
        $qb->andWhere('re.reservation_date = :reservation_date');
        $qb->setParameter('reservation_date', $date);
        $qb->andWhere('re.trajet_id = :trajet_id');
        $qb->setParameter('trajet_id', $trajet_id);
         
        $qb->setMaxResults(1);
        
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function getCount($user)
    {
        $qb = $this->createQueryBuilder('c')->select('COUNT(c.id)');

        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('c.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }

        return $qb->getQuery()->getSingleScalarResult();
    }

    public function getRecap($user)
    {
        $qb = $this->createQueryBuilder('re');
         
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('re.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }
        
        return $qb->getQuery()->getResult();
    }

    public function findEntriesToAffect($direction, $date, $location)
    {
        $location = $direction == 'Entrée' ? 'dropoffLocation' : 'pickupLocation';
        $qb = $this->createQueryBuilder('re');
        $qb->select('re.reservation_heure, count(re.id) AS count_all, re.'.$location);
        //$qb->where('re.status = :status');
        //$qb->setParameter('status', 'validée');
        //$qb->andWhere('re.navette_id = :navette_id');
        //$qb->setParameter('navette_id', NULL);
        $qb->groupBy('re.reservation_heure, re.'.$location);
        
        return $qb->getQuery()->getResult();
    }

    public function getEntry($navette)
    {
    $direction = $navette->getDirection();
    $sort = $navette->getDirection() == 'Entrée' ? 'DESC' : 'ASC';

    $qb = $this->createQueryBuilder('e');
    $qb->where('e.navette_id = :navette_id')
       ->setParameter('navette_id', $navette->getId())
       ->orderBy('e.distance', $sort)
       ;

    return $qb->getQuery()->setMaxResults(1)->getResult();
    }

    public function getNotAffected($navette)
    {
    $sort = $navette->getDirection() == 'Entrée' ? 'DESC' : 'ASC';

    $qb = $this->createQueryBuilder('e');
    $qb->where('e.navette_id != :navette_id')
       ->setParameter('navette_id', $navette->getId())
       ->andWhere('e.reservation_date = :reservation_date')
       ->setParameter('reservation_date', $navette->getDateNavette()->format('Y-m-d'))
       ->andWhere('e.reservation_heure = :reservation_heure')
       ->setParameter('reservation_heure', $navette->getHeureNavette())
       ->andWhere('e.direction = :direction')
       ->setParameter('direction', $navette->getDirection())
       ->orderBy('e.distance', $sort)
       ;

    return $qb->getQuery()
          ->getResult();
    }



}
