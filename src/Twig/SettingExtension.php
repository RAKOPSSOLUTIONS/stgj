<?php

namespace App\Twig;

use Twig\TwigFunction;
use App\Repository\SettingRepository;
use Twig\Extension\AbstractExtension;

class SettingExtension extends AbstractExtension
{

  private $settingRepository;

  public function __construct(SettingRepository $settingRepository) {
    $this->settingRepository = $settingRepository;
  }

  public function getFunctions()
  {
    return [
      new TwigFunction('get_setting', [$this, 'getSetting']),
      new TwigFunction('get_choice_value_by_id', [$this, 'getChoiceValueById']),
    ];
  }

  public function getSetting($name, $default = null)
  {
    return $this->settingRepository->get($name, $default);
  }

  public function getChoiceValueById($setting_name, $choice_id, $default = null)
  {
    return $this->settingRepository->getChoiceValueById($setting_name, $choice_id, $default);
  }

}