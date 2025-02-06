<?php

namespace App\Form\Search;

use App\Entity\User;
use App\Entity\Reservation;
use App\Entity\Trajet;
use App\Entity\Pickup;
use App\Entity\Tarif;
use App\Helpers\Base;
use App\Entity\ReservationEntries;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityManagerInterface;


class ReservationEntriesSearchType extends AbstractType
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
    $date = $options['request']->get('date');
    $status = $options['request']->get('status');
    $heure = $options['request']->get('heure');
    $direction = $options['request']->get('direction');
    $trajet_id = $options['request']->get('trajet_id');
    $pickup_id = $options['request']->get('pickup_id');

    $trajet = $pickup = null;
    $TarifRepo = $this->entityManager->getRepository(Tarif::class);

    if ($options['trajet_id']) {
      $trajet = $options['em']->getRepository(Trajet::class)->find($options['trajet_id']);
    }

    if ($options['pickup_id']) {
      $pickup = $options['em']->getRepository(Pickup::class)->find($options['pickup_id']);
    }

    $builder->add('date', DateType::class, [
      'label' => 'Date',
      'html5' => true,
      'mapped' => false,
      'required' => false,
      'widget' => 'single_text',
      'attr' => ['class' => 'col-md-2'],
      'data' => $date ? new \DateTime($date) : null
    ]);

    $builder->add('heure', ChoiceType::class, [
                  'label' => "Heure",
                  'choices'  => array_flip(Reservation::SHIFTS_ALL),
                  'help' => '',
                  'required' => false,
                  'mapped' => false,
                  'data' => $heure
                ]);

    $builder->add('trajet_id', EntityType::class, [
      'label' => "Trajet",
      'class' => Trajet::class,
      'placeholder' => '',
      'mapped' => false,
      'group_by' => 'zone',
      'required' => false,
      'data' => $trajet
    ]);

    $builder->add('pickup_id', EntityType::class, [
      'label' => "Pickup",
      'class' => Pickup::class,
      'placeholder' => '',
      'mapped' => false,
      'group_by' => 'trajet',
      'required' => false,
      'data' => $pickup
    ]);

    $builder->add('direction', ChoiceType::class, [
      'label' => "Direction",
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(Reservation::DIRECTIONS),
      'data' => $direction
    ]);

    $builder->add('status', ChoiceType::class, [
      'label' => "Statut",
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(ReservationEntries::STATUS),
      'data' => $status
    ]);

  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('em');
    $resolver->setRequired('user');
    $resolver->setRequired('trajet_id');
    $resolver->setRequired('pickup_id');
    $resolver->setRequired('request');
  }

  public function getBlockPrefix()
  {
    return '';
  }
}
