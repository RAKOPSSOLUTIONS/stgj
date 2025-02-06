<?php

namespace App\Form;

use App\Entity\Tarif;
use App\Helpers\Base;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TarifType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        

        $builder
            ->add('category', ChoiceType::class, [
               'label' => "Région",
               'choices'  => array_flip(Tarif::REGIONS),
               'expanded' => true,
               'attr' => ['style' => 'display: flex;']

            ])
            
            ->add('zone', TextType::class, ['label' => "Zone"])
            ->add('places', TextType::class, ['label' => "Nombre de places"])
            ->add('tarif', TextType::class, ['label' => "Tarif"])
            ->add('status', ChoiceType::class, [
               'label' => "Statut",
               'choices'  => array_flip(Tarif::STATUS),
               'expanded' => true,
               'attr' => ['style' => 'display: flex;']

    ])
            ;
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tarif::class,
        ]);
    }
}
