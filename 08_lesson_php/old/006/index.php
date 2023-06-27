<?php
// ***********************************
// 反復横跳び
// ***********************************

$input_arr = [];

//テスト用
$file = dirname(__FILE__) . '/input.txt';
$input_arr = file($file, FILE_IGNORE_NEW_LINES);


// //実装用
// while( ($line = fgets(STDIN)) !== false){
// $input_arr[] = $line;
// }

[$N, $X, $K] = explode(' ', $input_arr[0]);

if($K % 4 === 3){
  echo 2 * $X * floor(($K - 4 * $N) / 4) + $X . PHP_EOL;
}else{
  echo 2 * $X * floor(($K - 4 * $N) / 4) . PHP_EOL;
}


