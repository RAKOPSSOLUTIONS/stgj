<?php

namespace App\Repository;

use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Category>
 *
 * @method Category|null find($id, $lockMode = null, $lockVersion = null)
 * @method Category|null findOneBy(array $criteria, array $orderBy = null)
 * @method Category[]    findAll()
 * @method Category[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Category::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Category $entity, bool $flush = true): void
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
    public function remove(Category $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function getItemsForSelect($user, $direction='Entrée'){
        
        $qb = $this->createQueryBuilder('c')
                   //->select('c.name, c.category')
                   ->andWhere('c.direction = :direction')
                   ->setParameter('direction', $direction)
                   ->andWhere('c.status = :status')
                   ->setParameter('status', 'active');
        if ( !$user->isAdmin() ){
            $qb->andWhere('c.site = :site')
            ->setParameter('site', $user->getCompany());
        }
        $qb->orderBy('c.site, c.category, c.name', 'ASC');
        $items = $qb->getQuery()->getResult();
        $options = ['Trajet' => [], 'Shift' => [], 'Pickup' => []];
        foreach($items as $item) {
          $category = $item->getCategory();
          $name = $item->getName();
          
          //if ( !in_array($category, $options)) $options[$category] = [];
          $options[$category][$name] = $name;
          
        }

        return $options;

    }

    public function getItemsGroupedBySite(){
        
        $qb = $this->createQueryBuilder('c')
                   //->select('c.site, c.name, c.direction')
                   ->andWhere('c.status = :status')
                   ->setParameter('status', 'active')
                   ->andWhere('c.category = :category')
                   ->setParameter('category', 'Trajet')
                   ->orderBy('c.site, c.category, c.name', 'ASC');
        $items = $qb->getQuery()->getResult();


        return $items;


        $options = [];
        foreach($items as $item) {
          $category = $item->getCategory();
          $site = $item->getSite();
          $name = $item->getName();
          $direction = $item->getDirection();
          
          if ( !in_array($site, $options)) $options[$site] = [];
          if ( !in_array($direction, $options[$site])) $options[$site][$direction] = [];
          $options[$site][$direction][$name] = $name;
          
        }

        return $options;

    }

}
