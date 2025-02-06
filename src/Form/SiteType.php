<?php

namespace App\Form;

use App\Entity\Site;
use App\Entity\Societe;
use App\Helpers\Base;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Doctrine\ORM\EntityRepository;

class SiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('societe', EntityType::class, [
         'label' => "Societé",
         'class' => Societe::class,
         'query_builder' => function (EntityRepository $er) {
           return $er->createQueryBuilder('s')
                     ->andWhere("s.status = 'active'")
                     ->orderBy('s.name', 'ASC');
           },
        'empty_data' => '',
         ])
            ->add('name', TextType::class, ['label' => "Nom"])
            ->add('latitude', TextType::class, ['label' => "Latitude"])
            ->add('longitude', TextType::class, ['label' => "Longitude"])
            ->add('status', ChoiceType::class, [
               'label' => "Statut",
               'choices'  => array_flip(Site::STATUS),
               'expanded' => true,
               'attr' => ['style' => 'display: flex;']

    ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Site::class,
        ]);
    }
}
