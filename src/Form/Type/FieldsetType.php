<?php

namespace App\Form\Type;

use Symfony\Component\Form\FormView;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FieldsetType extends AbstractType {

  public function configureOptions(OptionsResolver $resolver): void
  {
    $resolver->setDefaults(['title' => '']);
  }

  public function buildView ( FormView $view, FormInterface $form, array $options ) {
    if (isset($options['title'])) {
      $view->vars['title'] = $options['title'];
    }
  }

  public function getName() {
    return 'styled_title';
  }

}