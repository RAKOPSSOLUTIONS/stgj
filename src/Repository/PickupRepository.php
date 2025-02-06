<?php

namespace App\Repository;

use App\Entity\Pickup;
use App\Entity\Trajet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pickup>
 *
 * @method Pickup|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pickup|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pickup[]    findAll()
 * @method Pickup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PickupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pickup::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Pickup $entity, bool $flush = true): void
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
    public function remove(Pickup $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function getItemsForSelect($user, $direction='Entrée'){
        
        $em = $this->getEntityManager();
        $qb = $em->getRepository(Trajet::class)->createQueryBuilder('t');
        $subQuery = $qb->getEntityManager()->createQueryBuilder()
            ->select('t.id')
            ->from(Trajet::class, 't')
            ->where('t.site = :site')
            ->setParameter('site', $user->getCompany())
            ->andWhere('t.status = :status')
            ->setParameter('status', 'active');


        $qb = $this->createQueryBuilder('p')
                   //->select('c.name')
                   ->andWhere('p.direction = :direction')
                   ->setParameter('direction', $direction)
                   ->andWhere('p.status = :status')
                   ->setParameter('status', 'active')
                   ->andWhere($qb->expr()->in('p.trajet_id', $subQuery->getDQL()))
                   ->setParameter('site', $user->getCompany());

        $qb->orderBy('p.trajet, p.name', 'ASC');
        $items = $qb->getQuery()->getResult();
        $options = [];
        foreach($items as $item) {
          $name = $item->getName();
          $trajet = $item->getTrajet();
          //if ( !isset($options[$trajet]) ) $options[$trajet] = [];        
          $options[$name] = $name;
          
        }
 
        return $options;

    }

    public function findOrCreate($lat, $long, $adresse)
    {
        $em = $this->getEntityManager();
        $pickupRepo = $em->getRepository(Pickup::class);
        $pickup = $pickupRepo->findOneBy(['latitude' => $lat, 'longitude' => $long]);
            if ($pickup) {
                return $pickup; 
            } else {
                $pickup = new Pickup();
                $pickup->setLatitude($lat);
                $pickup->setLongitude($long);
                $pickup->setName( empty($adresse) ? $lat .','. $long : $adresse);
                $em->persist($pickup);
                $em->flush();

                return $pickup; 
            }
        
    }


}
