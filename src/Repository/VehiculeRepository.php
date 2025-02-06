<?php

namespace App\Repository;

use App\Entity\Vehicule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Vehicule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vehicule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vehicule[]    findAll()
 * @method Vehicule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehiculeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vehicule::class);
    }

    public function exists($entity)
    {
        $qb = $this->createQueryBuilder('v');
        $qb->where('v.immatriculation = :immatriculation');
        $qb->setParameter('immatriculation', $entity->getImmatriculation());
        if ($entity->getId()) {
            $qb->andWhere('v.id != :id');
            $qb->setParameter('id', $entity->getId());
        }
        $qb->setMaxResults(1);
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function getName(Vehicule $vehicule, array $marques, array $modeles, array $types)
    {
        $choice_label = [];
        $marque_id = $vehicule->getMarqueId();
        if (isset($marques[$marque_id])) {
          $choice_label[] =  $marques[$marque_id];
        }
        $modele_id = $vehicule->getModeleId();
        if (isset($modeles[$modele_id])) {
          $choice_label[] =  $modeles[$modele_id];
        }
        $type_id = $vehicule->getTypeId();
        if (isset($types[$type_id])) {
          $choice_label[] =  $types[$type_id];
        }
        $immatriculation = $vehicule->getImmatriculation();
        if ($immatriculation) {
          $choice_label[] =  $immatriculation;
        }
        return implode(' | ', $choice_label);
    }
}
