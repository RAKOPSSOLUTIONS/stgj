<?php
namespace App\Form\Search;

use App\Entity\Societe;
use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;


class ReclamationSearchType extends AbstractType
{

  private $entityManager;

  public function __construct(EntityManagerInterface $entityManager)
  {
    $this->entityManager = $entityManager;
  }

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $societe = $status = null;
    $current_user = $options['user'];
    
    if ($options['sid']) {
      $societe = $options['em']->getRepository(Societe::class)->find($options['sid']);
    }
         
    $builder->add('q', TextType::class, [
      'label' => 'Mots clés',
      'mapped' => false,
      'required' => false
    ]);

    if ($this->security->isGranted('ROLE_ADMIN')) {
      $builder->add('sid', EntityType::class, [
        'label' => 'Société',
        'mapped' => false,
        'required' => false,
        'class' => Societe::class,
        'data' => $societe
      ]);
    }

   /* $builder->add('status', ChoiceType::class, [
      'label' => 'Statut',
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(Reclamation::STATUS)
    ]);*/

    
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('em');
    $resolver->setRequired('user');
    $resolver->setRequired('sid');
    $resolver->setRequired('status');
  }

  public function getBlockPrefix() {
    return '';
  }

}
