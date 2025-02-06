<?php

// src/Service/ExcelReportService.php
namespace App\Service;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\Response;

class ExcelReportService
{
    public function createExcel(array $headers, array $data, string $filename): Response
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Ajouter les en-têtes
        foreach ($headers as $key => $header) {
            $sheet->setCellValueByColumnAndRow($key + 1, 1, $header);
        }

        // Ajouter les données
        $row = 2;
        foreach ($data as $item) {
            $col = 1; // Initialiser une colonne numérique
            foreach ($item as $value) {
                $sheet->setCellValueByColumnAndRow($col, $row, $value);
                $col++; // Incrémenter la colonne
            }
            $row++; // Incrémenter la ligne après chaque item
        }

        // Générer et envoyer le fichier Excel
        $writer = new Xlsx($spreadsheet);
        $response = new Response();
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment;filename="' . $filename . '"');
        $response->headers->set('Cache-Control', 'max-age=0');

        $tempFile = tempnam(sys_get_temp_dir(), 'report');
        $writer->save($tempFile);
        $response->setContent(file_get_contents($tempFile));
        unlink($tempFile);

        return $response;
    }
}
