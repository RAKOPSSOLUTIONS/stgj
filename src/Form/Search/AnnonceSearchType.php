<?php
namespace App\Form\Search;

use App\Entity\Annonce;
use App\Helpers\Base;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class AnnonceSearchType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $site = $options['request']->get('site');
    $category = $options['request']->get('category');
    $direction = $options['request']->get('direction');
    $status = $options['request']->get('status');

    $builder->add('q', TextType::class, [
      'label' => 'Mot clé',
      'mapped' => false,
      'required' => false
    ]);

    $builder->add('status', ChoiceType::class, [
      'label' => "Statut",
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(Annonce::STATUS),
      'data' => $status
    ]);

  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('em');
    $resolver->setRequired('request');
  }

  public function getBlockPrefix() {
    return '';
  }

}
