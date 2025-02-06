<?php
    
namespace App\Controller\Admin;

use Symfony\Component\Uid\Uuid;
use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class FileController extends BaseController
{

  /**
   * @Route(methods={"POST"}, path="/admin/file/upload", name="file.upload")
   */
  public function upload(Request $request, TranslatorInterface $translator)
  {
    $path = $request->get('path');
    $extensions = ['jpeg', 'jpg', 'png', 'gif', 'pdf', 'doc', 'docx', 'xls', 'xlsx', 'dat', 'zip', 'rar'];
    $file = $request->files->get('file');
    if (!$file) return $this->json([
      'status' => 'error',
      'message' => $translator->trans("Veuillez sélectionner un fichier")
    ]);
    $extension = strtolower($file->getClientOriginalExtension());
    if (!empty($extensions) && !in_array($extension, $extensions)) return $this->json([
      'status' => 'error',
      'message' => 'Les formats de fichier acceptés sont: ('. implode(', ', $extensions) .')'
    ]);
    $source = $this->getProjectDir('/public' . $path);
    $file_name = Uuid::v4()->toRfc4122() .'.'. $extension;
    $file_title = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
    try {
      if ($file->move($source, $file_name)) {
        return $this->json([
          'status'    => 'success', 
          'extension' => $extension,
          'file_name' => $file_title .'.'. $extension,
          'file_path' => str_replace('/uploads/', '', $path) .'/'. $file_name
        ]);
      }
    } catch (\Exception $e) {}
    
    return $this->json([
      'status' => 'error',
      'message' => $translator->trans("Une erreur est survenue lors de sauvegarde de fichier")
    ]);
  }

}
