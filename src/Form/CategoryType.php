<?php

namespace App\Form;

use App\Entity\Category;
use App\Entity\Reservation;
use App\Helpers\Base;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CategoryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, ['label' => "Nom"])
            ->add('site', ChoiceType::class, [
               'label' => "Site",
               'choices'  => array_flip(Reservation::SITES),
               //'expanded' => true,
               //'attr' => ['style' => 'display: flex;'],
               'attr' => ['class' => 'trajet_condition' ]
               ])
            ->add('direction', ChoiceType::class, [
                  'label' => "Direction",
                  'choices'  => array_flip(Category::DIRECTIONS),
                  //'expanded' => true,
                  //'attr' => ['style' => 'display: flex;'],
                   'attr' => ['class' => 'trajet_condition' ]
                ])
            /*->add('trajet', ChoiceType::class, [
                  'label' => "Trajet",
                  'required' => false,
                  'choices'  => array_flip(Category::DIRECTIONS),
                ])*/
            
            ->add('category', ChoiceType::class, [
               'label' => "Type",
               'choices'  => array_flip(Category::TYPES),
               //'expanded' => true,
              // 'attr' => ['style' => 'display: flex;']
               ])
            ->add('status', ChoiceType::class, [
               'label' => "Statut",
               'choices'  => array_flip(Category::STATUS),
               'expanded' => true,
               'attr' => ['style' => 'display: flex;']

    ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Category::class,
        ]);
    }
}
