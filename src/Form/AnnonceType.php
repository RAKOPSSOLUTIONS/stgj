<?php

namespace App\Form;

use App\Entity\Annonce;
use App\Helpers\Base;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, ['label' => "Titre"])
            ->add('message', TextType::class, ['label' => "Message"])
            ->add('destinataire', ChoiceType::class, [
               'label' => "Destinataire",
               'choices'  => array_flip(Annonce::DESTINATAIRES),
               'expanded' => true,
               'attr' => ['style' => 'display: flex;']

            ])
            ->add('status', ChoiceType::class, [
               'label' => "Statut",
               'choices'  => array_flip(Annonce::STATUS),
               'expanded' => true,
               'attr' => ['style' => 'display: flex;']

    ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
        ]);
    }
}
