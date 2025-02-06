<?php

namespace App\Form;

use App\Entity\Navette;
use App\Entity\User;
use App\Entity\Vehicule;
use App\Entity\Trajet;
use App\Entity\Societe;
use App\Entity\Reservation;
use App\Entity\Tarif;
use App\Helpers\Base;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\Type\AjaxUploadType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class NavetteType extends AbstractType
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
      $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $trajet = $builder->getData();
        $TarifRepo = $this->entityManager->getRepository(Tarif::class);
        $user = $options['user'];
        $shifts = [];
        $items = range(5, 24);
        foreach ($items as $item) {
          $shifts[$item. 'H'] = $item;
        }

        if ($user->isAdmin() )

        $builder
             
            /*->add('societe', EntityType::class, [
                 'label' => "Société",
                 'class' => Societe::class,
                 'placeholder' => '',
                 'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('s')
                    ->andWhere("s.status = 'active'")
                    ->orderBy('s.name', 'ASC');
      },
            ])
            ->add('zone', ChoiceType::class, [
                  'label' => "Zone",
                  'placeholder' => '',
                  'choices' => array_flip($TarifRepo->getZonesForSelect())
            ])*/
            ->add('date_navette', DateType::class, [
                  'label' => "Date de navette",
                  'widget' => 'single_text'
                ])

            ->add('heure_navette', ChoiceType::class, [
                  'label' => "Heure",
                  'choices'  => $shifts ,
                  'help' => ''
                ])
            ->add('direction', ChoiceType::class, [
                  'label' => "Direction",
                  'choices'  => array_flip(Reservation::DIRECTIONS),
                  'help' => ''
                ])

            ->add('trajet', EntityType::class, [
                 'label' => "Trajet",
                 'class' => Trajet::class,
                 'placeholder' => '',
                 'query_builder' => function (EntityRepository $er) {
                return $er->createQueryBuilder('t')
                    ->andWhere("t.status = 'active'")
                    ->orderBy('t.name', 'ASC');
      },
            ])

            ->add('dureeUp', TextType::class, ['label' => "Durée", 'required' => false,])
            ->add('distanceUp', TextType::class, ['label' => "Distance", 'required' => false,])
            ->add('nomTrajet', TextType::class, ['label' => "Nom du trajet", 'required' => false,])
          
            ->add('vehicule', EntityType::class, [
                 'label' => "Véhicule",
                 'class' => Vehicule::class,
                 'placeholder' => '',
                 'query_builder' => function (EntityRepository $er) {
                 return $er->createQueryBuilder('v')
                    ->andWhere('v.en_service = 1')
                    ->orderBy('v.marque_id, v.modele_id', 'ASC');
      }
           ]) 

          /*  ->add('start_at', DateTimeType::class, [
              'label' => "Start at",
              'required' => false,
              'widget' => 'single_text',  // Utilise un champ d'entrée unique
              'input'  => 'datetime',     // Stocke comme objet DateTime
              'with_seconds' => true,    // Désactive les secondes
            ])
     ->add('end_at', DateTimeType::class, [
              'label' => "End at",
              'required' => false,
              'widget' => 'single_text',  // Utilise un champ d'entrée unique
              'input'  => 'datetime',     // Stocke comme objet DateTime
              'with_seconds' => true,    // Désactive les secondes
            ])*/
            ;

       else {
            $builder->add('comment', TextareaType::class, [
       
      'required' => false,
      'label' => 'Commentaire',
      'empty_data' => '',
      'attr' => [
        'style' => 'min-height:80px;'
      ]
    ]);
        }

            
             
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setRequired('user');
        $resolver->setDefaults([
            'data_class' => Navette::class,
        ]);
    }
}
