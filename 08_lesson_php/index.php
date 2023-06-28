<?php
// ***********************************
// 燃費
// ***********************************

$input_arr = [];

//テスト用
$file = dirname(__FILE__) . '/input.txt';
$input_arr = file($file, FILE_IGNORE_NEW_LINES);


// //実装用
// while( ($line = fgets(STDIN)) !== false){
// $input_arr[] = $line;
// }

$departure_len = $input_arr[0]; //発進距離
[$initial_fuel, $general_fuel] = explode(' ', $input_arr[1]); //燃費
[$total_len, $stop_num] = explode(' ', $input_arr[2]); //総距離、停車回数
$stop_positions = explode(' ', $input_arr[3]); //停止位置

$total_fuel = 0;
$current_pos = 0;

// 停止位置までの移動処理
foreach ($stop_positions as $stop_pos) {
  $move_len = $stop_pos - $current_pos;
  if ($move_len < $departure_len) {
    $total_fuel += $initial_fuel * $move_len;
  } else {
    $total_fuel +=
      ($initial_fuel * $departure_len) +
      ($general_fuel * ($move_len - $departure_len));
  }
  $current_pos += $move_len;
}

// 目的地までの最後の処理
$move_len = $total_len - $current_pos;
if ($move_len < $departure_len) {
  $total_fuel += $initial_fuel * $move_len;
} else {
  $total_fuel +=
    ($initial_fuel * $departure_len) +
    ($general_fuel * ($move_len - $departure_len));
}

//出力処理
echo $total_fuel . PHP_EOL;
