<?php

$input_arr = [];

//テスト用
$file = dirname(__FILE__) . '/input.txt';
$input_arr = file($file, FILE_IGNORE_NEW_LINES);


// //実装用
// while( ($line = fgets(STDIN)) !== false){
// $input_arr[] = $line;
// }

[$low, $col] = explode(' ', $input_arr[0]);
$array = [];
[$target_low, $target_col] = explode(' ', $input_arr[$low + 1]);
$check_array = ['0 0', '0 1', '1 0', '0 -1', '-1 0'];

for ($i = 1; $i < $low + 1; $i++) {
  $array[] = $input_arr[$i];
}

foreach ($check_array as $check) {
  [$l, $c] = explode(' ', $check);
  $check_low =  $target_low + $l;
  $check_col =  $target_col + $c;
  $target = $array[$check_low][$check_col];

  if (
    $check_low >= 0
    && $check_col >= 0
    && $check_low < $low 
    && $check_col < $col 
  ) {
    // echo "foo" . PHP_EOL;
    if ($target === '#') {
      $array[$check_low][$check_col] = '.';
    } else {
      $array[$check_low][$check_col] = '#';
    }
  }
}

foreach ($array as $value) {
  echo $value . PHP_EOL;
}
