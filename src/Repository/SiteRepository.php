<?php

namespace App\Repository;

use App\Entity\Site;
use App\Entity\Societe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Site>
 *
 * @method Site|null find($id, $lockMode = null, $lockVersion = null)
 * @method Site|null findOneBy(array $criteria, array $orderBy = null)
 * @method Site[]    findAll()
 * @method Site[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Site::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Site $entity, bool $flush = true): void
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
    public function remove(Site $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function getItemsForSelect($user){
        
        $em = $this->getEntityManager();
        $qb = $this->createQueryBuilder('p')
                   ->where('s.societe_id = :societe_id')
                   ->setParameter('societe_id', $user->getSociete()->getId())
                   ->andWhere('s.status = :status')
                   ->setParameter('status', 'active')
                   ;

        $qb->orderBy('s.societe, s.name', 'ASC');
        $items = $qb->getQuery()->getResult();
        $sites = [];
        foreach($items as $item) {
          $name = $item->getName();
          $trajet = $item->getSociete();
          $sites[$name] = $name;
          
        }
 
        return $sites;

    }


}
