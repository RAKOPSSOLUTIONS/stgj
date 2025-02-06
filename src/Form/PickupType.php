<?php

namespace App\Form;

use App\Entity\Pickup;
use App\Entity\Reservation;
use App\Entity\Trajet;
use App\Helpers\Base;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Doctrine\ORM\EntityRepository;

class PickupType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('trajet', EntityType::class, [
         'label' => "Trajet",
         'class' => Trajet::class,
         'query_builder' => function (EntityRepository $er) {
           return $er->createQueryBuilder('t')
                     ->andWhere("t.status = 'active'")
                     ->orderBy('t.site, t.name', 'ASC');
           },
        'empty_data' => '',
        'group_by' => 'site',
        'attr' => ['class' => 'trajet']
         ])
            ->add('name', TextType::class, ['label' => "Nom"])
           /* ->add('direction', ChoiceType::class, [
                  'label' => "Direction",
                  'choices'  => array_flip(Reservation::DIRECTIONS),
                  'expanded' => true,
                  'attr' => ['style' => 'display: flex;'],
                ])
            ->add('heure', TimeType::class, [
              'label' => "Heure de passage",
              'required' => false,
              'widget' => 'single_text',  // Utilise un champ d'entrée unique
              'input'  => 'datetime',     // Stocke comme objet DateTime
              'with_seconds' => false,    // Désactive les secondes
            ])*/
            ->add('latitude', TextType::class, ['label' => "Latitude", 'required' => false])
            ->add('longitude', TextType::class, ['label' => "Longitude", 'required' => false])
            ->add('status', ChoiceType::class, [
               'label' => "Statut",
               'choices'  => array_flip(Pickup::STATUS),
               'expanded' => true,
               'attr' => ['style' => 'display: flex;']

    ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Pickup::class,
        ]);
    }
}
