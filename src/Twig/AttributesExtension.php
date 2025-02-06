<?php

namespace App\Twig;

use Twig\Environment;
use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AttributesExtension extends AbstractExtension
{

  public function getFunctions()
  {
    return [
      new TwigFunction('chm_attributes', [$this, 'renderAttributes'])
    ];
  }

  public function renderAttributes($attributes = [])
  {
    $attrs = [];
    foreach ($attributes as $key => $value) {
      $attrs[] = "{$key}=\"{$this->exec($value)}\"";
    }
    return implode(' ', $attrs);
  }
  
  public function exec($closure)
  {
    if (is_callable($closure)) {
      return call_user_func($closure);
    }
    return $closure;
  }

}