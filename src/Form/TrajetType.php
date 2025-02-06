<?php

namespace App\Form;

use App\Entity\Trajet;
use App\Entity\Reservation;
use App\Entity\User;
use App\Entity\Vehicule;
use App\Entity\Tarif;
use App\Entity\Site;
use App\Helpers\Base;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\Type\AjaxUploadType;


class TrajetType extends AbstractType
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
      $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $TarifRepo = $this->entityManager->getRepository(Tarif::class);
        $trajet = $builder->getData();

        
            $builder->add('site', EntityType::class, [
      'label' => "Site",
      'group_by' => 'societe',
      'class' => Site::class,
      'placeholder' => '',
      'mapped' => false,
      'required' => false,
    ])
            ->add('name', TextType::class, ['label' => "Nom"])
            
           /* ->add('user', EntityType::class, [
                 'label' => "Chauffeur",
                 'class' => User::class,
                 'placeholder' => '',
                 'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('u')
                    ->andWhere("u.roles LIKE '%chauffeur%'")
                    ->andWhere("u.status = 'active'")
                    ->orderBy('u.nom, u.prenom', 'ASC');
      },
            ])
            ->add('vehicule', EntityType::class, [
                 'label' => "Véhicule",
                 'class' => Vehicule::class,
                 'placeholder' => '',
                 'query_builder' => function (EntityRepository $er) {
                 return $er->createQueryBuilder('v')
                    ->andWhere('v.en_service = 1')
                    ->orderBy('v.marque_id, v.modele_id', 'ASC');
      }
           ])*/

            //getZonesForSelect

            ->add('zone', ChoiceType::class, [
                  'label' => "Zone",
                  'placeholder' => '',
                  'choices' => array_flip($TarifRepo->getZonesForSelect())
            ])

            

            ->add('status', ChoiceType::class, [
               'label' => "Statut",
               'choices'  => array_flip(Trajet::STATUS),
               'expanded' => true,
               'attr' => ['style' => 'display: flex;']

    ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trajet::class,
        ]);
    }
}
