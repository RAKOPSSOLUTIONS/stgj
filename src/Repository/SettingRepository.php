<?php

namespace App\Repository;

use App\Entity\Setting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Setting|null find($id, $lockMode = null, $lockVersion = null)
 * @method Setting|null findOneBy(array $criteria, array $orderBy = null)
 * @method Setting[]    findAll()
 * @method Setting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SettingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Setting::class);
    }

    public function get($name, $default = null)
    {
        if (isset($GLOBALS['madaef']->settings[$name])) {
            return $GLOBALS['madaef']->settings[$name];
        }

        $settings = [];
        foreach ($this->findAll() as $setting) {
            $settings[$setting->getName()] = $setting->getValue(true);
        }
        if (!isset($GLOBALS['madaef'])) {
            $GLOBALS['madaef'] = new \stdClass;
        }
        $GLOBALS['madaef']->settings = $settings;

        return isset($settings[$name]) ? $settings[$name] : $default;
    }

    public function getChoiceValueById($setting_name, $choice_id, $default = null)
    {
        $choices = $this->get($setting_name, []);
        return isset($choices[$choice_id]) ? $choices[$choice_id] : $default;
    }

    public function exists($entity)
    {
        $qb = $this->createQueryBuilder('s');
        $qb->where('s.name = :name');
        $qb->setParameter('name', $entity->getName());
        if ($entity->getId()) {
            $qb->andWhere('s.id != :id');
            $qb->setParameter('id', $entity->getId());
        }
        $qb->setMaxResults(1);
        return $qb->getQuery()->getOneOrNullResult();
    }
}
