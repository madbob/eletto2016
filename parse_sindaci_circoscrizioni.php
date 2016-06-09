<?php

$file = file('sindaci.csv');

$elements = [
  'VOTANTI' => (object)[
    'icon' => '',
    'col' => 12
  ],
  'USSEGLIO VIRETTA Roberto' => (object)[
    'col' => 19
  ],
  'BATTISTA Anna' => (object)[
    'col' => 21
  ],
  'DEVOTI Pier Carlo Luigi' => (object)[
    'col' => 23
  ],
  'AIRAUDO Giorgio' => (object)[
    'col' => 25
  ],
  'ARIOTTO Alessio' => (object)[
    'col' => 27
  ],
  'NOCCETTI Gianluca' => (object)[
    'col' => 29
  ],
  'RACCA Marco' => (object)[
    'col' => 31
  ],
  'APPENDINO Chiara' => (object)[
    'col' => 33
  ],
  'ROSSO Roberto' => (object)[
    'col' => 35
  ],
  'VARALDO Lorenzo' => (object)[
    'col' => 37
  ],
  'COLUCCI Vitantonio detto Vito' => (object)[
    'col' => 39
  ],
  'NAPOLI Osvaldo' => (object)[
    'col' => 41
  ],
  'LEVI Mario Cornelio' => (object)[
    'col' => 43
  ],
  'DEL PERO Guglielmo' => (object)[
    'col' => 45
  ],
  'FASSINO Piero Franco Rodolfo' => (object)[
    'col' => 47
  ],
  'RIZZO Marco' => (object)[
    'col' => 49
  ],
  'MORANO Alberto' => (object)[
    'col' => 51
  ]
];

require('parse_commons.php');
$elements = handle_data($file, $elements);
echo json_encode($elements);

