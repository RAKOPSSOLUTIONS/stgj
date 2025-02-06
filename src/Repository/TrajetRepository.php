<?php

namespace App\Repository;

use App\Entity\Trajet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;

/**
 * @extends ServiceEntityRepository<Trajet>
 *
 * @method Trajet|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trajet|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trajet[]    findAll()
 * @method Trajet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrajetRepository extends ServiceEntityRepository
{
    public function __construct(
        ManagerRegistry $registry, 
        Security $security
    ) {
        $this->security = $security;
        parent::__construct($registry, Trajet::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Trajet $entity, bool $flush = true): void
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
    public function remove(Trajet $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findById($user, $trajet_id)
    {
        $qb = $this->createQueryBuilder('t');
        $qb->where('t.id = :trajet_id');
        $qb->setParameter('trajet_id', $trajet_id);
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            $qb->andWhere('t.user_id = :user_id');
            $qb->setParameter('user_id', $user->getId());
        }
        $qb->setMaxResults(1);
        
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function getItemsForSelect($user, $direction='Entrée'){
        
        $qb = $this->createQueryBuilder('t')
                   //->select('c.name')
                   ->andWhere('t.direction = :direction')
                   ->setParameter('direction', $direction)
                   ->andWhere('t.status = :status')
                   ->setParameter('status', 'active')
                   ->andWhere('t.site = :site')
                   ->setParameter('site', $user->getCompany());

        $qb->orderBy('t.site, t.name', 'ASC');
        $items = $qb->getQuery()->getResult();
        $options = [];
        foreach($items as $item) {
          
          $name = $item->getName();          
          $options[$name] = $name;
          
        }

        return $options;

    }

}
