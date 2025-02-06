<?php

namespace App\Repository;

use App\Entity\Reservation;
use App\Entity\Link;
use App\Entity\Media;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\ReservationRepository;
use Symfony\Component\Security\Core\Security;


/**
 * @extends ServiceEntityRepository<Reservation>
 *
 * @method Reservation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reservation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reservation[]    findAll()
 * @method Reservation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationRepository extends ServiceEntityRepository
{
    public function __construct(
        ManagerRegistry $registry, 
        Security $security
    ) {
        $this->security = $security;
        parent::__construct($registry, Reservation::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Reservation $entity, bool $flush = true): void
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
    public function remove(Reservation $entity, bool $flush = true): void
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

    public function getCount($user)
    {
        $qb = $this->createQueryBuilder('c')->select('COUNT(c.id)');

        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('c.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }

        return $qb->getQuery()->getSingleScalarResult();
    }



}
