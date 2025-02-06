<?php

namespace App\Form\Type;

use Symfony\Component\Form\FormView;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AjaxUploadType extends AbstractType
{

  public function getName() {
    return 'ajax_upload';
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults([
      'min' => 0,
      'max' => 0,
      'files' => [],
      'path' => '/uploads',
      'extensions' => ['jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'xls', 'xlsx']
    ]);
  }

  public function buildView(FormView $view, FormInterface $form, array $options) { 
    $view->vars['min'] = $options['min'];
    $view->vars['max'] = $options['max'];
    $view->vars['path'] = $options['path'];
    $view->vars['files'] = $options['files'];
    $view->vars['extensions'] = $options['extensions'];
  }

}