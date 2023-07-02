<?php
// ***********************************
// 位置情報
// ***********************************

$input_arr = [];

// //テスト用
$file = dirname(__FILE__) . '/input.txt';
$input_arr = file($file, FILE_IGNORE_NEW_LINES);


// //実装用
// while( ($line = fgets(STDIN)) !== false){
// $input_arr[] = $line;
// }

$loop_num = $input_arr[0];
$pos_arr = [];
for ($i = 1; $i <= $loop_num; $i++) {
  $pos_arr[] = explode(' ', $input_arr[$i]);
}

for ($i = 0; $i < count($pos_arr) - 1; $i++) {
  $difference = abs($pos_arr[$i][0] - $pos_arr[$i + 1][0]);
  $current_y = trim($pos_arr[$i][1]);
  $current_x = trim($pos_arr[$i][2]);
  $next_y = trim($pos_arr[$i + 1][1]);
  $next_x = trim($pos_arr[$i + 1][2]);
  $y_diff = abs($current_y - $next_y);
  $x_diff = abs($current_x - $next_x);
  $dy = ($current_y > $next_y) ? -1 : 1;
  $dx = ($current_x > $next_x) ? -1 : 1;
  $cell_y = $y_diff / $difference * $dy;
  $cell_x = $x_diff / $difference * $dx;
  for ($j = 0; $j < $difference; $j++) {
    echo $current_y . ' ' . $current_x . PHP_EOL;
    $current_y = intval($current_y + $cell_y);
    $current_x = intval($current_x + $cell_x);
  }
}

$end_y = trim(end($pos_arr)[1]);
$end_x = trim(end($pos_arr)[2]);
echo $end_y . ' ' . $end_x . PHP_EOL;

