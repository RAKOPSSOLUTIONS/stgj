<?php
namespace App\Form\Search;

use App\Entity\Setting;
use App\Entity\Modele;
use App\Entity\Marque;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class VehiculeSearchType extends AbstractType
{

  private $entityManager;

  public function __construct(EntityManagerInterface $entityManager)
  {
    $this->entityManager = $entityManager;
  }

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $settingRepo = $this->entityManager->getRepository(Setting::class);
    
    $builder->add('q', TextType::class, [
      'label' => 'Mots clés',
      'mapped' => false,
      'required' => false,
    ]);
    $builder->add('marque_id', EntityType::class, [
      'label' => "Marque",
      'class' => Marque::class,
      'placeholder' => '',
      'mapped' => false,
      'required' => false
    ]);
    $builder->add('modele_id', EntityType::class, [
      'label' => "Modèle",
      'group_by' => 'marque',
      'class' => Modele::class,
      'placeholder' => '',
      'mapped' => false,
      'required' => false
    ]);
    $builder->add('type_id', ChoiceType::class, [
      'label' => "Type",
      'placeholder' => '',
      'mapped' => false,
      'required' => false,
      'choices' => array_flip($settingRepo->get('vehicule.types'))
    ]);
    $builder->add('en_service', CheckboxType::class, [
      'label'    => 'En service?',
      'mapped' => false,
      'required' => false
    ]);
  }

  public function getBlockPrefix() {
    return '';
  }

}
