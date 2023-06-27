<?php
// ***********************************
// perfect shuffle
// ***********************************

$input_arr = [];

//テスト用
$file = dirname(__FILE__) . '/input.txt';
$input_arr = file($file, FILE_IGNORE_NEW_LINES);


// //実装用
// while( ($line = fgets(STDIN)) !== false){
// $input_arr[] = $line;
// }

$shuffle_num = $input_arr[0];

$cards = [];
$elements = array('S', 'H', 'D', 'C');
$numbers = range(1, 13);

foreach ($elements as $element) {
  foreach ($numbers as $number) {
    $card = $element . '_' . $number;
    $cards[] = $card;
  }
}

$current_cards = $cards;
$above_cards = [];
$bottom_cards = [];

for ($i = 0; $i < $shuffle_num; $i++) {

  $new_cards = [];
  for ($j = 0; $j < count($current_cards) / 2; $j ++) {
    $new_cards[] = $current_cards[$j];
    $new_cards[] = $current_cards[26 + $j];
  }

  $current_cards = $new_cards;
}

foreach ($current_cards as $card) {
  echo $card . PHP_EOL;
}
