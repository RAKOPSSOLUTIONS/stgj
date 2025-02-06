<?php
    
namespace App\Controller;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseController extends AbstractController
{

  public function getProjectDir($path = '')
  {
    return $this->getParameter('kernel.project_dir') . $path;
  }

  public function removeFile($path)
  {
    $file = $this->getProjectDir('/public/uploads/'. $path);
    if (file_exists($file) && is_readable($file)) {
      $filesystem = new Filesystem();
      $filesystem->remove($file);
    }
  }

  public function getSingleFileUpload(Request $request, string $field_name, ?string $path = null)
  {
    if (empty($path)) {
      $path = $field_name;
    }

    $files = $request->get($field_name);

    if (!isset($files[0]) || empty($files[0])) {
      return null;
    }

    $file = json_decode($files[0], true);
    if (!isset($file['path']) || empty($file['path'])) {
      return null;
    }

    return str_replace("$path/", '', $file['path']);
  }

}
