<?php
namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Form\Type\FieldsetType;
use App\Form\Type\AjaxUploadType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;


class ReclamationType extends AbstractType
{

  private $entityManager;

  public function __construct(EntityManagerInterface $entityManager)
  {
    $this->entityManager = $entityManager;
  }

  public function buildForm(FormBuilderInterface $builder, array $options)
  {
  $current_user = $options['user'];
  $societe_id = $current_user->getSociete()->getId();
  
  $reclamation = $builder->getData();

  if ( empty($reclamation->getId()) ) {

    
    $builder->add('objet', ChoiceType::class, [
                  'label' => "Objet",
                  'choices'  => array_flip(Reclamation::OBJETS),
                  'help' => '',
                ])

    ->add('message', TextareaType::class, [
      'required' => false,
      'label' => 'Message',
      'empty_data' => '',
      'attr' => [
        'style' => 'min-height:80px;'
      ]
      ])

    ->add("fichier", AjaxUploadType::class, [
      'label' => "Attachement",
      'mapped' => false,
      'required' => false,
      'files' => $reclamation->getFichier(),
      'path' => '/uploads/reclamations/attachments'
    ]);

  }
  else{

   $builder->add('reponse', TextareaType::class, [
      'required' => false,
      'label' => 'Réponse',
      'empty_data' => '',
      'attr' => [
        'style' => 'min-height:80px;'
      ]
      ]);

  }
}

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setRequired('user');
    $resolver->setRequired('em');
    $resolver->setDefaults([
      'data_class' => Reclamation::class
    ]);
  }


}
