<?php
namespace App\Form;

use App\Entity\Marque;
use App\Entity\Modele;
use App\Form\Type\AjaxUploadType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ModeleType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $entity = $builder->getData();

    $builder->add('name', TextType::class, [
      'label' => "Nom"
    ]);
    
    $builder->add('marque', EntityType::class, [
      'label' => "Marque",
      'class' => Marque::class,
      'placeholder' => ''
    ]);
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('user');
    $resolver->setDefaults([
      'data_class' => Modele::class
    ]);
  }
}
