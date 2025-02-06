<?php
namespace App\Form\Search;

use App\Entity\Modele;
use App\Entity\Marque;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class ModeleSearchType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {

    $builder->add('q', TextType::class, [
      'label' => 'Mots clés',
      'mapped' => false,
      'required' => false
    ]);

  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('em');
  }
  
  public function getBlockPrefix() {
    return '';
  }

}
