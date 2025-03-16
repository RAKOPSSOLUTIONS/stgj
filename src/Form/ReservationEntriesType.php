<?php

namespace App\Form;

use App\Entity\ReservationEntries;
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

class ReservationEntriesType extends AbstractType
{

    public function __construct(EntityManagerInterface $entityManager)
    {
      $this->entityManager = $entityManager;
    }


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $entry = $builder->getData();
         
         
        $user = $options['user'];
        $shifts = $entry->getDirection()=='Entrée' ? Reservation::SHIFTS_ENTREE : Reservation::SHIFTS_SORTIE;
        $trajet_id = $entry->getTrajet() ? $entry->getTrajet()->getId() : null;
        $pickup_id = $entry->getPickup() ? $entry->getPickup()->getId() : null;

 
        $builder

            
            ->add('reservation_heure', ChoiceType::class, [
                  'label' => "Heure",
                  'choices'  => array_flip($shifts),
                  'help' => '',
                  'required' => false,
                ])
            
            ->add('trajet', EntityType::class, [
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
->add('adresse', TextType::class, [
                'label' => "Adresse du domicile", 
                'required' => false,
                'mapped' => false,
                'help' => 'Votre adresse est modifiable depuis le menu : Mon compte',
                'data' => $user->getAdresse(),
                'attr' => ['disabled' => 'disabled'],
                //'placeholder' => 'Ville, rue ...'
            ])
             
        ->add('pickup', EntityType::class, [
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
          ->orderBy('p.trajet_id, p.heure', 'ASC');
      },
      'choice_label' => 'name',
      'required' => false,
      'attr' => ['class' => 'pickup_entree'],
      'choice_attr' => function ($entity) use ($trajet_id) {
        $t_id = $entity->getTrajet()->getId();
        return [
          'data-trajet' => $entity->getTrajet()->getId(),
          'style' => $t_id != $trajet_id ? 'display: none;' : ''
        ];
      }
    ]);



     

            
             
             

            


            //->add('begin_on', TextType::class, ['required' => false, 'attr' => ['class' => 'datetimepicker']])
            //->add('end_on', TextType::class, ['required' => false, 'attr' => ['class' => 'datetimepicker']]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setRequired('user');
        $resolver->setDefaults([
            'data_class' => ReservationEntries::class,
        ]);
    }
}
