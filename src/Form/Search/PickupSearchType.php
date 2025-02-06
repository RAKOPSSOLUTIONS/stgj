<?php
namespace App\Form\Search;

use App\Entity\Pickup;
use App\Entity\Reservation;
use App\Entity\Trajet;
use App\Helpers\Base;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class PickupSearchType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $trajet = $options['request']->get('trajet');
    $category = $options['request']->get('category');
    $direction = $options['request']->get('direction');
    $status = $options['request']->get('status');

    $builder->add('q', TextType::class, [
      'label' => 'Mot clé',
      'mapped' => false,
      'required' => false
    ]);
    
    $builder->add('trajet', EntityType::class, [
         'label' => "Trajet",
         'class' => Trajet::class,
         'query_builder' => function (EntityRepository $er) {
           return $er->createQueryBuilder('t')
                     ->andWhere("t.status = 'active'")
                     ->orderBy('t.site, t.name', 'ASC');
           },
        'mapped' => false,
        'required' => false,
        'group_by' => 'site',
        'attr' => ['class' => 'trajet']
    ]);

    $builder->add('direction', ChoiceType::class, [
      'label' => "Direction",
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(Reservation::DIRECTIONS),
      'data' => $direction
    ]);

    $builder->add('status', ChoiceType::class, [
      'label' => "Statut",
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(Pickup::STATUS),
      'data' => $status
    ]);

  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('em');
    $resolver->setRequired('request');
  }

  public function getBlockPrefix() {
    return '';
  }

}
