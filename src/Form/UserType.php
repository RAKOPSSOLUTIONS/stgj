<?php
namespace App\Form;

use App\Entity\User;
use App\Entity\Reservation;
use App\Entity\Societe;
use App\Entity\Site;
use App\Entity\Tarif;
use App\Helpers\Base;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;

class UserType extends AbstractType
{

  private $security;
  private $entityManager;

  public function __construct(Security $security, EntityManagerInterface $entityManager)
  {
    $this->security = $security;
     $this->entityManager = $entityManager;
  }

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $user = $builder->getData();
    $isNew = $user->getId() < 1;
    $TarifRepo = $this->entityManager->getRepository(Tarif::class);

   if ( $isNew OR $this->security->isGranted('ROLE_ADMIN') ) {
     
   
    $builder->add('site', EntityType::class, [
      'label' => "Site",
      'group_by' => 'societe',
      'class' => Site::class,
      'placeholder' => ''
    ]);
  
    $builder->add('matricule', TextType::class, [
      'label' => "Matricule"
    ]);
   }
   
    /*$builder->add('projet', TextType::class, [
      'label' => "Projet",
      'required' => false,
    ]);*/
 if (   $this->security->isGranted('ROLE_ADMIN') ) {
    $builder->add('zone', ChoiceType::class, [
                  'label' => "Zone",
                  'placeholder' => '',
                  'choices' => array_flip($TarifRepo->getZonesForSelect())
            ]);
   }
    if ( $isNew ) {
    $builder->add('prenom', TextType::class, [
      'label' => "Prénom"
    ]);
    $builder->add('nom', TextType::class, [
      'label' => "Nom"
    ]);
   }
    $builder->add('telephone', TextType::class, [
      'label' => "Téléphone"
    ]);
    $builder->add('adresse', TextType::class, [
      'label' => "Adresse",
    ]);

   
    if ( $this->security->isGranted('ROLE_ADMIN') ) {
      
     /* $builder->add('status', ChoiceType::class, [
        'label' => "Statut",
        'placeholder' => '',
        'choices'  => array_flip(User::STATUS)
      ]);*/
      $builder->add('role_name', ChoiceType::class, [
        'label' => "Rôle",
        'mapped' => false,
        'placeholder' => '',
        'data' => !$isNew ? $user->getRoleName() : '',
        'choices'  => array_flip(User::ROLES)
      ]);
    }
    $builder->add('email', TextType::class, [
      'label' => "Email"
    ]);

    $builder->add('latitude', HiddenType::class, [
      'label' => "latitude"
    ]);

    $builder->add('longitude', HiddenType::class, [
      'label' => "longitude"
    ]);
    
    $builder->add('password', PasswordType::class, [
      'label' => "Mot de passe",
      'mapped' => false,
      'required' => $isNew,
      'help' => !$isNew ? 'Remplissez ce champs pour changer le mot de passe' : '',
    ]);
    $builder->add('confirm_password', PasswordType::class, [
      'label' => "Confirmation",
      'mapped' => false,
      'required' => $isNew
    ]);


  }
  
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('user');
    $resolver->setDefaults([
      'data_class' => User::class
    ]);
  }
}
