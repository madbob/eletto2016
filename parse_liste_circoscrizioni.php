<?php

$file = file('liste.csv');

$elements = [
  'VOTANTI' => (object)[
    'icon' => '',
    'col' => 12
  ],
  'FORZA NUOVA' => (object)[
    'icon' => '2-20160605000000-37-20812620.png',
    'col' => 19
  ],
  'BASTA!' => (object)[
    'icon' => '2-20160605000000-1-20812620.png',
    'col' => 21
  ],
  'LA PIAZZA' => (object)[
    'icon' => '2-20160605000000-18-20812620.png',
    'col' => 23
  ],
  'AMBIENTE TORINO' => (object)[
    'icon' => '2-20160605000000-21-20812620.png',
    'col' => 25
  ],
  'PENSIONATI E INVALIDI GIOVANI' => (object)[
    'icon' => '2-20160605000000-23-20812620.png',
    'col' => 27
  ],
  'TORINO IN COMUNE' => (object)[
    'icon' => '2-20160605000000-14-20812620.png',
    'col' => 29
  ],
  'PARTITO COMUNISTA DEI LAVORATORI' => (object)[
    'icon' => '2-20160605000000-34-20812620.png',
    'col' => 31
  ],
  'AUTOMOBILISTA' => (object)[
    'icon' => '2-20160605000000-7-20812620.png',
    'col' => 33
  ],
  'AMICI 4 ZAMPE' => (object)[
    'icon' => '2-20160605000000-4-20812620.png',
    'col' => 35
  ],
  'DISOCCUPATI PRECARI ESODATI' => (object)[
    'icon' => '2-20160605000000-6-20812620.png',
    'col' => 37
  ],
  'FORZA TORO' => (object)[
    'icon' => '2-20160605000000-5-20812620.png',
    'col' => 39
  ],
  'LEGA PADANA PIEMONT' => (object)[
    'icon' => '2-20160605000000-3-20812620.png',
    'col' => 41
  ],
  'CASAPOUND ITALIA' => (object)[
    'icon' => '2-20160605000000-20-20812620.png',
    'col' => 43
  ],
  'MOVIMENTO5STELLE.IT' => (object)[
    'icon' => '2-20160605000000-12-20812620.png',
    'col' => 45
  ],
  'ALLEANZA DEMOCRATICA' => (object)[
    'icon' => '2-20160605000000-28-20812620.png',
    'col' => 47
  ],
  'ROBERTO ROSSO SINDACO' => (object)[
    'icon' => '2-20160605000000-27-20812620.png',
    'col' => 49
  ],
  'UNIONE PENSIONATI' => (object)[
    'icon' => '2-20160605000000-9-20812620.png',
    'col' => 51
  ],
  'MIR MODERATI IN RIVOLUZIONE' => (object)[
    'icon' => '2-20160605000000-10-20812620.png',
    'col' => 53
  ],
  'UDC AREA POPOLARE' => (object)[
    'icon' => '2-20160605000000-26-20812620.png',
    'col' => 55
  ],
  'ABROGAZIONE!' => (object)[
    'icon' => '2-20160605000000-29-20812620.png',
    'col' => 57
  ],
  'IL POPOLO DELLA FAMIGLIA' => (object)[
    'icon' => '2-20160605000000-11-20812620.png',
    'col' => 59
  ],
  'UN SOGNO PER TORINO' => (object)[
    'icon' => '2-20160605000000-32-20812620.png',
    'col' => 61
  ],
  'SALVIAMO L\'OFTALMICO INSIEME' => (object)[
    'icon' => '2-20160605000000-17-20812620.png',
    'col' => 63
  ],
  'FORZA ITALIA' => (object)[
    'icon' => '2-20160605000000-22-20812620.png',
    'col' => 65
  ],
  'ITALIA DEI VALORI' => (object)[
    'icon' => '2-20160605000000-35-20812620.png',
    'col' => 67
  ],
  'SIAMO TORINO' => (object)[
    'icon' => '2-20160605000000-33-20812620.png',
    'col' => 69
  ],
  'LISTA CIVICA PER FASSINO' => (object)[
    'icon' => '2-20160605000000-16-20812620.png',
    'col' => 71
  ],
  'PROGETTO TORINO' => (object)[
    'icon' => '2-20160605000000-15-20812620.png',
    'col' => 73
  ],
  'PARTITO DEMOCRATICO' => (object)[
    'icon' => '2-20160605000000-19-20812620.png',
    'col' => 75
  ],
  'MODERATI PER FASSINO' => (object)[
    'icon' => '2-20160605000000-8-20812620.png',
    'col' => 77
  ],
  'PARTITO COMUNISTA' => (object)[
    'icon' => '2-20160605000000-13-20812620.png',
    'col' => 79
  ],
  'MORANO SINDACO' => (object)[
    'icon' => '2-20160605000000-24-20812620.png',
    'col' => 81
  ],
  'LEGA NORD PIEMONT' => (object)[
    'icon' => '2-20160605000000-30-20812620.png',
    'col' => 83
  ],
  'FRATELLI D\'ITALIA' => (object)[
    'icon' => '2-20160605000000-31-20812620.png',
    'col' => 85
  ],
];

require('parse_commons.php');
$elements = handle_data($file, $elements);
echo json_encode($elements);

