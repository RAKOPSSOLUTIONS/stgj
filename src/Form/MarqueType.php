<?php
namespace App\Form;

use App\Entity\Marque;
use App\Form\Type\AjaxUploadType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class MarqueType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $entity = $builder->getData();
    $logo = $entity->getLogo();

    $builder->add('name', TextType::class, [
      'label' => "Nom"
    ]);
    
    $builder->add("logo", AjaxUploadType::class, [
      'label' => "Logo",
      'mapped' => false,
      'required' => false,
      'max' => 1,
      'files' => $logo ? [['name' => $logo, 'path' => "marques/{$logo}"]] : [],
      'path' => '/uploads/marques',
      'extensions' => ['jpeg', 'jpg', 'png']
    ]);
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('user');
    $resolver->setDefaults([
      'data_class' => Marque::class
    ]);
  }
}
