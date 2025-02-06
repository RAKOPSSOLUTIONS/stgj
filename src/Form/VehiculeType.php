<?php
namespace App\Form;

use App\Entity\Setting;
use App\Entity\Vehicule;
use App\Entity\Modele;
use App\Entity\User;
use App\Form\Type\AjaxUploadType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Doctrine\ORM\EntityRepository;


class VehiculeType extends AbstractType
{

  private $entityManager;

  public function __construct(EntityManagerInterface $entityManager)
  {
    $this->entityManager = $entityManager;
  }

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $vehicule = $builder->getData();
    $settingRepo = $this->entityManager->getRepository(Setting::class);

    /*$builder->add('marque_id', ChoiceType::class, [
      'label' => "Marque",
      'placeholder' => '',
      'choices' => array_flip($settingRepo->get('vehicule.marques'))
    ]);*/

    $builder->add('modele', EntityType::class, [
      'label' => "Modèle",
      'group_by' => 'marque',
      'class' => Modele::class,
      'placeholder' => ''
    ]);

    $builder->add('seats', IntegerType::class, [
      'label' => "Nombre de places"
    ]);
    
    $builder->add('type_id', ChoiceType::class, [
      'label' => "Type",
      'placeholder' => '',
      'choices' => array_flip($settingRepo->get('vehicule.types'))
    ]);
    $builder->add('type_moteur_id', ChoiceType::class, [
      'label' => "Type de moteur",
      'placeholder' => '',
      'choices' => array_flip($settingRepo->get('vehicule.type_moteurs'))
    ]);
    $builder->add('groupe_id', ChoiceType::class, [
      'label' => "Etat physique du véhicule",
      'placeholder' => '',
      'choices' => array_flip($settingRepo->get('vehicule.groupes'))
    ]);
    $builder->add('date_circulation', DateType::class, [
      'label' => "Date de mise en circulation",
      'widget' => 'single_text',
      'required' => false
    ]);
    $builder->add('kilometrage', IntegerType::class, [
      'label' => "Kilométrage de départ"
    ]);
    $builder->add('immatriculation', TextType::class, [
      'label' => "Plaque d'immatriculation"
    ]);
    $builder->add('date_exp_inscription', DateType::class, [
      'label' => "Date d’acquisition",
      'widget' => 'single_text'
    ]);
    $builder->add('numero_chassis', TextType::class, [
      'label' => "Numéro de châssis",
      'required' => false
    ]);
    $builder->add('en_service', CheckboxType::class, [
      'label'    => 'En service?',
      'required' => false
    ]);
    $builder->add('user', EntityType::class, [
                 'label' => "Chauffeur",
                 'class' => User::class,
                 'required' => false,
                 'placeholder' => '',
                 'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->andWhere("u.roles LIKE '%chauffeur%'")
                    ->andWhere("u.status = 'active'")
                    ->orderBy('u.nom, u.prenom', 'ASC');
      },
            ]);
    $builder->add("images", AjaxUploadType::class, [
      'label' => false,
      'mapped' => false,
      'required' => false,
      'files' => $vehicule->getImages(),
      'path' => '/uploads/vehicule',
      'extensions' => ['jpeg', 'jpg', 'png']
    ]);
  }
  
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults([
      'data_class' => Vehicule::class,
    ]);
  }
}
