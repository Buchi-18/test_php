<?php
// ***********************************
// マップのナンバリング
// ***********************************

$input_arr = [];

//テスト用
$file = dirname(__FILE__) . '/input.txt';
$input_arr = file($file, FILE_IGNORE_NEW_LINES);


// //実装用
// while( ($line = fgets(STDIN)) !== false){
// $input_arr[] = $line;
// }

[$dy, $dx, $d] = explode(' ', $input_arr[0]);


$map = array_fill(0, $dy, array_fill(0, $dx, 0));
$count = 1;

switch ($d) {
  case 1:
    $map[0][0] = $count;
    $count++;

    for ($i = 1; $i < $dy; $i++) {
      for ($j = 0; $j <= min($i, $dx - 1); $j++) {
        $map[$i - $j][$j] = $count;
        $count++;
      }
    }
    for ($i = 1; $i < $dx; $i++) {
      for ($j = 0; $j < min($dy, $dx - $i); $j++) {
        $map[$dy - 1 - $j][$i + $j] = $count;
        $count++;
      }
    }
    break;

  case 2:
    for ($i = 0; $i  < $dy; $i++) {
      for ($j = 0; $j  < $dx; $j++) {
        $map[$i][$j] = $count;
        $count++;
      }
    }
    break;

  case 3:
    for ($i = 0; $i  < $dx; $i++) {
      for ($j = 0; $j  < $dy; $j++) {
        $map[$j][$i] = $count;
        $count++;
      }
    }
    break;

  case 4:
    $map[0][0] = $count;
    $count++;

    for ($i = 1; $i < $dx; $i++) {
      for ($j = 0; $j <= min($i, $dy - 1); $j++) {
        $map[$j][$i - $j] = $count;
        $count++;
      }
    }
    for ($i = 1; $i < $dy; $i++) {
      for ($j = 0; $j < min($dy - $i, $dx); $j++) {
        $map[$i + $j][$dx - 1 - $j] = $count;
        $count++;
      }
    }
    break;
}


// マップの出力
foreach ($map as $arr) {
  echo implode(" ", $arr) . PHP_EOL;
}
