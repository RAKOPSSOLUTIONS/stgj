<?php

namespace App\Repository;

use App\Entity\Navette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;

/**
 * @extends ServiceEntityRepository<Navette>
 *
 * @method Navette|null find($id, $lockMode = null, $lockVersion = null)
 * @method Navette|null findOneBy(array $criteria, array $orderBy = null)
 * @method Navette[]    findAll()
 * @method Navette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NavetteRepository extends ServiceEntityRepository
{
    public function __construct(
        ManagerRegistry $registry, 
        Security $security
    ) {
        $this->security = $security;
        parent::__construct($registry, Navette::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Navette $entity, bool $flush = true): void
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
    public function remove(Navette $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findById($user, $navette_id)
    {
        $qb = $this->createQueryBuilder('n');
        $qb->where('n.id = :navette_id');
        $qb->setParameter('navette_id', $navette_id);
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('n.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }

        $qb->setMaxResults(1);
        
        return $qb->getQuery()->getOneOrNullResult();
    }

}
