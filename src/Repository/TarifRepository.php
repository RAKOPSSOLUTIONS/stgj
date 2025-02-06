<?php

namespace App\Repository;

use App\Entity\Tarif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tarif>
 *
 * @method Tarif|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tarif|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tarif[]    findAll()
 * @method Tarif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TarifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tarif::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Tarif $entity, bool $flush = true): void
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
    public function remove(Tarif $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function getZonesForSelect(){
        
        $qb = $this->createQueryBuilder('t')
                   //->select('t.zone')
                   ->andWhere('t.status = :status')
                   ->setParameter('status', 'active');
        $qb->orderBy('t.id', 'ASC');
        $items = $qb->getQuery()->getResult();
        $options = [];
        foreach($items as $item) {
          $zone = $item->getZone();          
          if ( !array_key_exists($zone, $options)) $options[$zone] = $zone;
          
        }

        return $options;

    }

    public function findOneByZone($zone, $places)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.status = :status')
            ->setParameter('status', 'active')
            ->andWhere('t.zone = :zone')
            ->setParameter('zone', $zone)
            ->andWhere("t.places >= $places")
            //->setParameter('places =', $places)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }


}
