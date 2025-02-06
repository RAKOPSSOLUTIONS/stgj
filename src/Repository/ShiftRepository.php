<?php

namespace App\Repository;

use App\Entity\Shift;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Shift>
 *
 * @method Shift|null find($id, $lockMode = null, $lockVersion = null)
 * @method Shift|null findOneBy(array $criteria, array $orderBy = null)
 * @method Shift[]    findAll()
 * @method Shift[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShiftRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Shift::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Shift $entity, bool $flush = true): void
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
    public function remove(Shift $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function getItemsForSelect($user, $direction='Entrée'){
        
        $qb = $this->createQueryBuilder('s')
                   //->select('s.name')
                   ->andWhere('s.direction = :direction')
                   ->setParameter('direction', $direction)
                   ->andWhere('s.status = :status')
                   ->setParameter('status', 'active')
                   ->andWhere('s.site = :site')
                   ->setParameter('site', $user->getCompany());

        $qb->orderBy('s.site, s.name', 'ASC');
        $items = $qb->getQuery()->getResult();
        $options = [];
        foreach($items as $item) {
          
          $name = $item->getName();          
          $options[$name] = $name;
          
        }

        return $options;

    }


}
