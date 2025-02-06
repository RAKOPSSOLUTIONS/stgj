<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Category;
use App\Entity\Trajet;
use App\Entity\Shift;
use App\Entity\Pickup;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class ReservationType extends AbstractType
{

    public function __construct(EntityManagerInterface $entityManager)
    {
      $this->entityManager = $entityManager;
    }


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $reservation = $builder->getData();
         
        $dates = $options['dates'];
        $user = $options['user'];
        $shifts = [];
        $items = range(5, 24);
        foreach ($items as $item) {
          $shifts[$item. 'H'] = $item;
        }

        $trajet_entree_id = $reservation->getTrajetEntree() ? $reservation->getTrajetEntree()->getId() : null;
        $trajet_sortie_id = $reservation->getTrajetSortie() ? $reservation->getTrajetSortie()->getId() : null;

        $e_shifts = $this->entityManager->getRepository(Shift::class)->getItemsForSelect($user);
        $s_shifts = $this->entityManager->getRepository(Shift::class)->getItemsForSelect($user, 'Sortie');

        //$e_trajets = $this->entityManager->getRepository(Trajet::class)->getItemsForSelect($user);
        //$s_trajets = $this->entityManager->getRepository(Trajet::class)->getItemsForSelect($user, 'Sortie');

        //$e_pickups = $this->entityManager->getRepository(Pickup::class)->getItemsForSelect($user);
        //$s_pickups = $this->entityManager->getRepository(Pickup::class)->getItemsForSelect($user, 'Sortie');

 
        $builder

            
            ->add('shift_entree', ChoiceType::class, [
                  'label' => "Heure d'entrée",
                  'choices'  => array_flip(Reservation::SHIFTS_ENTREE),
                  'help' => '',
                  'attr' => ['class' => 'shift_entree', 'disabled' => 'disabled'],
                  'required' => false,
                ])
            ->add('shift_sortie', ChoiceType::class, [
                  'label' => "Heure de sortie",
                  'choices'  => array_flip(Reservation::SHIFTS_SORTIE),
                  'help' => '',
                  'attr' => ['class' => 'shift_sortie', 'disabled' => 'disabled'],
                  'required' => false,
                ])
            ->add('trajet_entree', EntityType::class, [
                 'label' => "Trajet",
                 'class' => Trajet::class,
                 'required' => false,
                 'placeholder' => '',
                 'query_builder' => function (EntityRepository $er) {
                 return $er->createQueryBuilder('t')
                    ->andWhere('t.status = :status')
                    ->setParameter('status', 'active')
                    //->andWhere('t.direction = :direction')
                    //->setParameter('direction', 'Entrée')
                    ->orderBy('t.name', 'ASC');
                 }
           ])

            ->add('trajet_sortie', EntityType::class, [
                  'label' => "Nom du trajet",
                  'help' => '',
                  //'group_by' => 'tarif',
                  'required' => false,
                  'class' => Trajet::class,
                  'attr' => ['class' => 'trajet'],
                  'query_builder' => function (EntityRepository $er) {
                 return $er->createQueryBuilder('t')
                    ->andWhere('t.status = :status')
                    ->setParameter('status', 'active')
                    //->andWhere('t.direction = :direction')
                    //->setParameter('direction', 'Sortie')
                    ->orderBy('t.name', 'ASC');
                 }
                ])
        ->add('pickup_entree', EntityType::class, [
      'label' => "Point de ramassage",
      'class' => Pickup::class,
      //'group_by' => 'trajet',
      'query_builder' => function (EntityRepository $er) use ($user) {
        return $er->createQueryBuilder('p')
          ->andWhere('p.status = :status')
          ->setParameter('status', 'active')
          ->join(Trajet::class, 't', 'WITH', 't.id = p.trajet_id')
          //->andWhere('t.direction = :direction')
          //->setParameter('direction', 'Entrée')
          //->andWhere('t.zone = :zone')
          //->setParameter('zone', $user->getZone())
          ->orderBy('p.trajet_id, p.name', 'ASC');
      },
      'choice_label' => 'name',
      'required' => false,
      'attr' => ['class' => 'pickup_entree'],
      'choice_attr' => function ($entity) use ($trajet_entree_id) {
        $te_id = $entity->getTrajet()->getId();
        return [
          'data-trajet' => $entity->getTrajet()->getId(),
          'style' => $te_id != $trajet_entree_id ? 'display: none;' : ''
        ];
      }
    ])

    ->add('pickup_sortie', EntityType::class, [
      'label' => "Point de ramassage",
      'class' => Pickup::class,
      //'group_by' => 'trajet',
      'query_builder' => function (EntityRepository $er) use ($user) {
        return $er->createQueryBuilder('p')
          ->andWhere('p.status = :status')
          ->setParameter('status', 'active')
          ->join(Trajet::class, 't', 'WITH', 't.id = p.trajet_id')
          //->andWhere('t.direction = :direction')
          //->setParameter('direction', 'Sortie')
          //->andWhere('t.zone = :zone')
          //->setParameter('zone', $user->getZone())
          ->orderBy('p.trajet_id, p.name', 'ASC');
      },
      'choice_label' => 'name',
      'required' => false,
      'attr' => ['class' => 'pickup_entree'],
      'choice_attr' => function ($entity) use ($trajet_sortie_id) {
        $ts_id = $entity->getTrajet()->getId();
        return [
          'data-trajet' => $entity->getTrajet()->getId(),
          'style' => $ts_id != $trajet_sortie_id ? 'display: none;' : ''
        ];
      }
    ])

            ->add('adresse_entree', TextType::class, [
                'label' => "Adresse du domicile", 
                'required' => false,
                'help' => 'Votre adresse est modifiable depuis le menu : Mon compte',
                'data' => $user->getAdresse(),
                'attr' => ['disabled' => 'disabled'],
                //'placeholder' => 'Ville, rue ...'
            ])
            ->add('adresse_sortie', TextType::class, [
                'label' => "Adresse du domicile", 
                'required' => false,
                'data' => $user->getAdresse(),
                'attr' => ['disabled' => 'disabled'],
                'help' => 'Votre adresse est modifiable depuis le menu : Mon compte',
                //'placeholder' => 'Ville, rue ...'
            ]);
            if ( $user->getSociete() && $user->getSociete()->getAfficherRepere() ){
            $builder->add('repere_entree', TextType::class, [
                'label' => "Point de repère le plus proche", 
                'required' => false,
                'help' => '',
                //'placeholder' => 'Point de repère le plus proche'
            ])


            ->add('repere_sortie', TextType::class, [
                'label' => "Point de repère le plus proche", 
                'required' => false,
                'help' => '',
                //'placeholder' => 'Point de repère le plus proche'
            ]);
            }

            $builder->add('dates_entree', ChoiceType::class, 
                ['label' => "Dates nécessitant le transport en entrée",
                'choices'  => $dates[0],
                'multiple' => true,
                'expanded' => true,
                'help' => '',
                'attr' => ['class' => 'dates_entree'],
            ])
            ->add('dates_sortie', ChoiceType::class, ['label' => "Dates nécessitant le transport en sortie",
                'choices'  => $dates[1],
                'multiple' => true,
                'expanded' => true,
                'help' => '',
                'attr' => ['class' => 'dates_sortie'],
        ])


            //->add('begin_on', TextType::class, ['required' => false, 'attr' => ['class' => 'datetimepicker']])
            //->add('end_on', TextType::class, ['required' => false, 'attr' => ['class' => 'datetimepicker']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setRequired('user');
        //$resolver->setRequired('e_home_pickup');
        //$resolver->setRequired('s_home_pickup');
        $resolver->setRequired('e_pickups');
        $resolver->setRequired('s_pickups');
        $resolver->setRequired('dates');
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
