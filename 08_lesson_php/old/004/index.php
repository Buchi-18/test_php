<?php
// ***********************************
// マップの判定・縦横斜め
// ***********************************

$input_arr = [];

//テスト用
$file = dirname(__FILE__) . '/input.txt';
$input_arr = file($file, FILE_IGNORE_NEW_LINES);


// //実装用
// while( ($line = fgets(STDIN)) !== false){
// $input_arr[] = $line;
// }

[$total_low, $total_col] = explode(' ', $input_arr[0]);
$array = [];
[$target_low, $target_col] = explode(' ', $input_arr[$total_low + 1]);

for ($i = 1; $i < $total_low + 1; $i++) {
  $array[] = trim($input_arr[$i]);
}

$result_arr = [
  direction($array, $target_low, $target_col, 0, 1),  // right
  direction($array, $target_low, $target_col, 0, -1), // left
  direction($array, $target_low, $target_col, -1, 0), // upper
  direction($array, $target_low, $target_col, 1, 0),  // lower
  direction($array, $target_low, $target_col, -1, 1), // right_upper
  direction($array, $target_low, $target_col, -1, -1), // left_upper
  direction($array, $target_low, $target_col, 1, 1),  // right_lower
  direction($array, $target_low, $target_col, 1, -1), // left_lower
];

//ターゲットを配列に代入
$check_array = [[$target_low, $target_col]];

foreach ($result_arr as  $results) {
  foreach ($results as $res) {
    $check_array[] = $res;
  }
}


//値の書き換え
foreach ($check_array as $target) {
  $y = $target[0];
  $x = $target[1];

  if ($array[$y][$x] === '#') {
    $array[$y][$x] = '.';
  } else {
    $array[$y][$x] = '#';
  }
}

//出力
foreach ($array as $value) {
  echo trim($value) . PHP_EOL;
}


// メソッド
function direction($array, $target_low, $target_col, $dy, $dx)
{
  $is_exist = true;
  $low = $target_low;
  $col = $target_col;
  $check_array = [];

  while ($is_exist) {
    $low += $dy;
    $col += $dx;

    if (
      $low >= 0
      && $col >= 0
      && $low < count($array)
      && $col < trim(strlen($array[0]))
    ) {
      $check_array[] = [$low, $col];
    } else {
      $is_exist = false;
      continue;
    }
  }

  return $check_array;
}
