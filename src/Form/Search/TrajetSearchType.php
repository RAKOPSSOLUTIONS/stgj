<?php
namespace App\Form\Search;

use App\Entity\Trajet;
use App\Entity\Reservation;
use App\Entity\User;
use App\Entity\Vehicule;
use App\Entity\Site;
use App\Helpers\Base;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;


class TrajetSearchType extends AbstractType
{

  private $entityManager;

  public function __construct(EntityManagerInterface $entityManager)
  {
    $this->entityManager = $entityManager;
  }


  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $site = $options['request']->get('site');
    $category = $options['request']->get('category');
    $direction = $options['request']->get('direction');
    $status = $options['request']->get('status');
    /*$vehicule_id = $options['request']->get('vehicule_id');
    $chauffeur_id = $options['request']->get('chauffeur_id');

    $vehicule = $chauffeur = null;

    if ($options['chauffeur_id']) {
      $chauffeur = $options['em']->getRepository(User::class)->find($options['chauffeur_id']);
    }

    if ($options['vehicule_id']) {
      $vehicule = $options['em']->getRepository(Vehicule::class)->find($options['vehicule_id']);
    }*/

    $builder->add('q', TextType::class, [
      'label' => 'Mot clé',
      'mapped' => false,
      'required' => false
    ]);
    $builder->add('site', EntityType::class, [
      'label' => "Site",
      'group_by' => 'societe',
      'class' => Site::class,
      'placeholder' => '',
      'mapped' => false,
      'required' => false,
    ]);

    /*$builder->add('chauffeur_id', EntityType::class, [
                 'label' => "Chauffeur",
                 'class' => User::class,
                 'placeholder' => '',
                 'mapped' => false,
                 'required' => false,
                 'data' => $chauffeur,
                 'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->andWhere("u.roles LIKE '%chauffeur%'")
                    ->andWhere("u.status = 'active'")
                    ->orderBy('u.nom, u.prenom', 'ASC');
      },
            ]);
      $builder->add('vehicule_id', EntityType::class, [
                 'label' => "Véhicule",
                 'class' => Vehicule::class,
                 'mapped' => false,
                 'required' => false,
                 'placeholder' => '',
                 'data' => $vehicule,
                 'query_builder' => function (EntityRepository $er) {
                 return $er->createQueryBuilder('v')
                    ->andWhere('v.en_service = 1')
                    ->orderBy('v.marque_id, v.modele_id', 'ASC');
      }
           ]);*/

    $builder->add('status', ChoiceType::class, [
      'label' => "Statut",
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(Trajet::STATUS),
      'data' => $status
    ]);

  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('em');
    $resolver->setRequired('request');
    $resolver->setRequired('chauffeur_id');
    $resolver->setRequired('vehicule_id');
  }

  public function getBlockPrefix() {
    return '';
  }

}
