<?php
namespace App\Form\Search;

use App\Entity\Site;
use App\Entity\Societe;
use App\Helpers\Base;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class SiteSearchType extends AbstractType
{

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $trajet = $options['request']->get('trajet');
    $status = $options['request']->get('status');

    $builder->add('q', TextType::class, [
      'label' => 'Mot clé',
      'mapped' => false,
      'required' => false
    ]);
    
    $builder->add('societe', EntityType::class, [
         'label' => "Societé",
         'class' => Societe::class,
         'query_builder' => function (EntityRepository $er) {
           return $er->createQueryBuilder('s')
                     ->andWhere("s.status = 'active'")
                     ->orderBy('s.id', 'ASC');
           },
        'mapped' => false,
        'required' => false,
    ]);

    $builder->add('status', ChoiceType::class, [
      'label' => "Statut",
      'mapped' => false,
      'required' => false,
      'choices'  => array_flip(Site::STATUS),
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
