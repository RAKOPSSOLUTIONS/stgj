<?php
namespace App\Form\Search;

use App\Entity\Tarif;
use App\Helpers\Base;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class TarifSearchType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $region = $options['request']->get('region');
    $status = $options['request']->get('status');

    $builder->add('q', TextType::class, [
      'label' => 'Mot clé',
      'mapped' => false,
      'required' => false
    ]);

    $builder->add('region', ChoiceType::class, [
      'label' => "Région",
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(Tarif::REGIONS),
      'data' => $region
    ]);

    $builder->add('status', ChoiceType::class, [
      'label' => "Statut",
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(Tarif::STATUS),
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
