<?php
namespace App\Form\Search;

use App\Entity\User;
use App\Entity\Reservation;
use App\Entity\Site;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UserSearchType extends AbstractType
{
  private $security;

  public function __construct(Security $security)
  {
    $this->security = $security;
  }
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    
    $user = $options['user'];

    $builder->add('q', TextType::class, [
      'label' => 'Mot clé',
      'mapped' => false,
      'required' => false
    ]);
    
    $builder->add('status', ChoiceType::class, [
      'label' => 'Statut',
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(User::STATUS)
    ]);
    if( $this->security->isGranted('ROLE_ADMIN')){
      $builder->add('role', ChoiceType::class, [
        'label' => 'Rôle',
        'mapped' => false,
        'required' => false,
        'choices'  => array_flip(User::ROLES)
      ]);
  
      $builder->add('site', EntityType::class, [
        'label' => "Site",
        'group_by' => 'societe',
        'class' => Site::class,
        'placeholder' => '',
        'mapped' => false,
        'required' => false,
      ]);  
    }

    
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('em');
    $resolver->setRequired('role');
    $resolver->setRequired('user');
  }

  public function getBlockPrefix() {
    return '';
  }

}
