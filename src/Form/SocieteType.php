<?php
namespace App\Form;

use App\Entity\Societe;
use App\Form\Type\AjaxUploadType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class SocieteType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $entity = $builder->getData();
    $logo = $entity->getFileName();

    $builder->add('name', TextType::class, [
      'label' => "Nom"
    ]);
    $builder->add('email', TextType::class, [
      'label' => "Email",
      'required' => false,
    ]);
    $builder->add('adress', TextType::class, [
      'label' => "Adresse",
      'required' => false
    ]);

    $builder->add('position', TextType::class, [
      'label' => "Position",
      'required' => false
    ]);
    $builder->add('telephone', TextType::class, [
      'label' => "Téléphone",
      'required' => false
    ]);
    $builder->add('website', UrlType::class, [
      'label' => "Site Web",
      'required' => false
    ]);
    $builder->add('type_reservation', ChoiceType::class, [
      'label' => "Type de réservations",
      'placeholder' => '',
      'choices'  => array_flip(Societe::TYPES)
    ]);
    $builder->add('deadline', TimeType::class, [
              'widget' => 'single_text',  // Utilise un champ d'entrée unique
              'input'  => 'datetime',     // Stocke comme objet DateTime
              'with_seconds' => false,    // Désactive les secondes
            ]);
    $builder->add('status', ChoiceType::class, [
      'label' => "État",
      'placeholder' => '',
      'choices'  => array_flip(Societe::STATUS)
    ]);
    $builder->add('adhesion', CheckboxType::class, [
      'label'    => 'Utilisateurs doivent accepter la charte?',
      'required' => false
    ]);

    $builder->add('afficher_repere', CheckboxType::class, [
      'label'    => 'Afficher le champs Point de repère le plus proche?',
      'required' => false
    ]);

    $builder->add("logo", AjaxUploadType::class, [
      'label' => "Logo",
      'mapped' => false,
      'required' => false,
      'max' => 1,
      'files' => $logo ? [['name' => $logo, 'path' => "societes/{$logo}"]] : [],
      'path' => '/uploads/societes',
      'extensions' => ['jpeg', 'jpg', 'png']
    ]);
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('user');
    $resolver->setDefaults([
      'data_class' => Societe::class
    ]);
  }
}
