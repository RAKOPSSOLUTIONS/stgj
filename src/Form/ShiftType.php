<?php

namespace App\Form;

use App\Entity\Shift;
use App\Entity\Reservation;
use App\Helpers\Base;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ShiftType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('site', ChoiceType::class, [
               'label' => "Site",
               'choices'  => array_flip(Reservation::SITES),
               //'expanded' => true,
               //'attr' => ['style' => 'display: flex;'],
               'attr' => ['class' => 'trajet_condition' ]
               ])
            ->add('name', TextType::class, ['label' => "Nom"])
            ->add('direction', ChoiceType::class, [
                  'label' => "Direction",
                  'choices'  => array_flip(Reservation::DIRECTIONS),
                  'expanded' => true,
                  'attr' => ['style' => 'display: flex;']
                ])
            ->add('status', ChoiceType::class, [
               'label' => "Statut",
               'choices'  => array_flip(Shift::STATUS),
               'expanded' => true,
               'attr' => ['style' => 'display: flex;']

    ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Shift::class,
        ]);
    }
}
