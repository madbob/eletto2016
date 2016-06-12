<?php

function handle_data($file, $elements) {
  /*
    Inizializzazione
  */
  
  $tot = count($file);

  foreach($elements as $name => $info) {
    $info->votes = array_fill_keys([1, 2, 3, 4, 5, 6, 7, 8], 0);
  }

  /*
    Somma
  */

  for ($i = 6; $i < $tot; $i++) {
    $row = $file[$i];
    $row = explode(',', $row);
    
    if($row[0] == 'TOTALE')
      break;
    
    $circ = $row[2];
    
    foreach($elements as $name => $info) {
      if (empty($row[$info->col]))
        continue;

      $info->votes[$circ] += $row[$info->col];
    }
  }

  return $elements;
}

