<?php

namespace App\Form\Search;

use App\Entity\User;
use App\Entity\Societe;
use App\Entity\Tarif;
use App\Helpers\Base;
use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityManagerInterface;

class ReservationSearchType extends AbstractType
{

  private $security;
  private $entityManager;

  public function __construct(Security $security, EntityManagerInterface $entityManager)
  {
    $this->security = $security;
    $this->entityManager = $entityManager;
  }

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $du = $options['request']->get('du');
    $au = $options['request']->get('au');
    $status = $options['request']->get('status');
    $site = $options['request']->get('site');
    $societe_id = $options['request']->get('societe_id');

    $TarifRepo = $this->entityManager->getRepository(Tarif::class);
    if ($this->security->isGranted('ROLE_ADMIN')) {
    $builder->add('societe_id', EntityType::class, [
      'label' => "Societé",
      'class' => Societe::class,
      'placeholder' => '',
      'mapped' => false,
      'required' => false
    ]);
    
    $builder->add('zone', ChoiceType::class, [
                  'label' => "Zone",
                  'placeholder' => '',
                  'mapped' => false,
      'required' => false,
                  'choices' => array_flip($TarifRepo->getZonesForSelect())
            ]);
   }
    $builder->add('date', DateType::class, [
      'label' => 'Date',
      'html5' => true,
      'mapped' => false,
      'required' => false,
      'widget' => 'single_text',
      'data' => $du ? new \DateTime($du) : null
    ]);

    $builder->add('status', ChoiceType::class, [
      'label' => "Statut",
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(Reservation::STATUS),
      'data' => $status
    ]);

  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('em');
    $resolver->setRequired('user');
    $resolver->setRequired('request');
  }

  public function getBlockPrefix()
  {
    return '';
  }
}
