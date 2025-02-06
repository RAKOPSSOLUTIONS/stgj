<?php
namespace App\Helpers;

class Base {

  const INITIAL_YEAR = 2021;

  const MONTHS = [
    1 => 'Janvier',
    2 => 'Février',
    3 => 'Mars',
    4 => 'Avril',
    5 => 'Mai',
    6 => 'Juin',
    7 => 'Juillet',
    8 => 'Aout',
    9 => 'Septembre',
    10 => 'Octobre',
    11 => 'Novembre',
    12 => 'Décembre'
  ];

  /**
   * Hyphens and dashes to camelcase
   *
   * @param string $string
   * @param boolean $capitalizeFirstCharacter
   * @return boolean
   *
   * @author mchanchaf
   */
  public static function dashesToCamelCase($string, $capitalizeFirstCharacter = true, $delimiter = '') 
  {
    $str = ucwords(preg_replace('/[-_]/', ' ', $string));
    $str = str_replace(' ', $delimiter, $str);
    if (!$capitalizeFirstCharacter) {
      $str[0] = strtolower($str[0]);
    }
    return $str;
  }

  public static function isValidEmail($email)
  {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  /**
   * Replace variables
   *
   * @param string $text
   * @param array $variables
   * @param string $openingTag
   * @param string $closingTag
   * @param boolean $wrapVar
   * @return boolean
   *
   * @author mchanchaf
   */
  public static function replaceVars($text, $variables = [], $openingTag = '{', $closingTag = '}', $wrapVar = false) {
    foreach ($variables as $key => $variable) :
      if (is_array($variable) || is_object($variable)) continue;
      if ($wrapVar) {
        $variable = "<code>{$variable}</code>";
      }
      $text = str_replace($openingTag . $key . $closingTag, $variable, $text);
    endforeach;

    // disable click traking for sendgrid
    $text = preg_replace('/(<a\b[^><]*)>/i', '$1 clicktracking="off">', $text);
    $text = preg_replace('/(<a\b[^><]*)>/i', '$1 rel="notrack">', $text);

    return $text;
  }

  public static function getParamsAndClausesFromKeywords($keywords, $columns, $delimiter = 'AND', $fullMatch = true)
  {
    $i = 0;
    $result = [];
    $keywords = $fullMatch ? [trim($keywords)] : explode(' ', trim($keywords));

    if (count($columns) == 1) {
      $columns = explode(',', $columns[0]);
    }

    foreach ($keywords as $keyword) {
      $result['params']['param'. $i] = '%'. addslashes($keyword) .'%';
      if (count($columns) == 1) {
        $clauses[] = $columns[0] ." LIKE :param{$i}";
      } else {
        $clauses[] = "CONCAT_WS('', ". implode(',', $columns) .") LIKE :param{$i}";
      }
      $i++;
    }

    $result['clauses'] = implode(" {$delimiter} ", $clauses);

    return $result;
  }

  public static function getRandomColor($with_hash = true)
  {
    $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
    return $with_hash ? $color : ltrim($color, '#');
  }

  public static function arrayToExcel(array $rows, string $filename, bool $download = false)
  {
    if (strpos($filename, '.xlsx') === false) {
      $filename = $filename . '.xlsx';
    }

    if ($download) {
      header('Content-Encoding: UTF-8');
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header("Content-Disposition: attachment; filename=\"{$filename}\"");
      header("Pragma: no-cache");
      header("Expires: 0");
    }

    $writer = new \App\Helpers\XLSXWriter();
    $writer->setAuthor('MADAEF');
    $writer->writeSheet($rows);
    $output = $writer->writeToString();

    if ($download) {
      echo $output;exit;
    } else {
      return $output;
    }
  }

  public static function arrayToPDF(array $rows, string $filename, bool $download = false)
  {
    if (strpos($filename, '.pdf') === false) {
      $filename = $filename . '.pdf';
    }
    $html = '<table style="width: 100%; border: 1px solid #000;" border="1" cellspacing="0">';
    $headers = isset($rows[0]) ? $rows[0] : [];
    if (!empty($headers)) {
      $html .= '<thead>';
      $html .= '<tr>';
      foreach($headers as $header) {
        $html .= "<th>{$header}</th>";
      }
      $html .= '</tr>';
      $html .= '</thead>';
    }
    if (count($rows) > 1) {
      $html .= '<tbody>';
      for ($i=1; $i < count($rows); $i++) {
        $html .= '<tr>';
        for ($j=0; $j < count($headers); $j++) {
          $html .= "<td>{$rows[$i][$j]}</td>";
        }
        $html .= '</tr>';
      }
      $html .= '</tbody>';
    }
    $html .= '</table>';
    $dest = $download ? 'D' : 'I';
    try {
      $mpdf = new \Mpdf\Mpdf();
      $mpdf->useSubstitutions = false;
      $mpdf->simpleTables = false;
      $mpdf->SetDisplayMode('fullpage');
      $mpdf->setDefaultFont('Arial');
      $mpdf->WriteHTML($html);
      $mpdf->Output($filename, $dest);
    } catch (\Exception $e) {
      dd($e->getMessage());
    }
  }

  public static function arrayCombine($array)
  {
    return array_combine($array, $array);
  }

  public static function getFileExtension($filename)
  {
    return strtolower(pathinfo($filename, PATHINFO_EXTENSION));
  }

  public static function getFileIcon($filename)
  {
    $extension = self::getFileExtension($filename);
    if (in_array($extension, ['html', 'cmd', 'bat', 'xml'])) {
      return "bi bi-file-code";
    } elseif (in_array($extension, ['zip', 'rar', 'gz', 'tar'])) {
      return "bi bi-file-zip";
    } elseif (in_array($extension, ['mp3', 'wav'])) {
      return "bi bi-file-music";
    } elseif (in_array($extension, ['xls', 'xlsx'])) {
      return "bi bi-file-excel";
    } elseif (in_array($extension, ['jpg', 'gif', 'bmp', 'svg', 'tiff', 'png'])) {
      return "bi bi-file-image";
    } elseif (in_array($extension, ['pdf'])) {
      return "bi bi-file-pdf";
    } elseif (in_array($extension, ['ppt', 'pptx'])) {
      return "bi bi-file-easel";
    } elseif (in_array($extension, ['txt', 'log', 'md'])) {
      return "bi bi-file-richtext";
    } elseif (in_array($extension, ['mp4', 'mpeg', 'swf'])) {
      return "bi bi-film";
    } elseif (in_array($extension, ['doc', 'docx'])) {
      return "bi bi-file-word";
    }
    return 'bi bi-file-richtext';
  }

  public static function convertTimeZone(string $dateTime, string $timeZone)
  {
    $date = new \DateTime($dateTime, new \DateTimeZone($timeZone));
    $date->setTimeZone(new \DateTimeZone('Africa/Casablanca'));
    return $date;
  }

  public static function getYearsList($minYear = self::INITIAL_YEAR)
  {
    $years = [];
    $maxYear = date('Y');
    for ($i = $maxYear; $i >= $minYear; $i--) { 
      $years[$i] = $i;
    }
    return $years;
  }

  /**
   * Convert seconds to humain readable format
   *
   * @param int $seconds
   * @param array $exclude parts to exclude
   *
   * @return string 1j 5h 30m 3s
   */
  public static function secondsToTime($seconds, $exclude = [])
  {
    $dt = new \DateTime('@' . $seconds, new \DateTimeZone('UTC'));
    $converted = [
      'j' => (int) $dt->format('z'), // days
      'h' => (int) $dt->format('G'), // hours
      'm' => (int) $dt->format('i'), // minutes
      's' => (int) $dt->format('s')  // seconds
    ];

    $output = '';
    foreach ($converted as $key => $value) {
      if ($value > 0 && !in_array($key, $exclude)) {
        $output .= ' ' . $value . $key;
      }
    }

    return !empty($output) ? trim($output) : '0s';
  }

} // END Class