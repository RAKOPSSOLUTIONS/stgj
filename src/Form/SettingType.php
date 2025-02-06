<?php
namespace App\Form;

use App\Entity\Setting;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class SettingType extends AbstractType
{
  
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->add('field_type', ChoiceType::class, [
      'label' => "Type",
      'choices'  => array_flip(Setting::FIELD_TYPES)
    ]);
    $builder->add('name', TextType::class, ['label' => "Name"]);
    $builder->add('description', TextareaType::class, ['label' => 'Description']);
    $builder->add('value', HiddenType::class);
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults([
      'data_class' => Setting::class
    ]);
  }
}
