<?php

$input_arr = [];

//テスト用
$file = dirname(__FILE__) . '/input.txt';
$input_arr = file($file, FILE_IGNORE_NEW_LINES);


// //実装用
// while( ($line = fgets(STDIN)) !== false){
// $input_arr[] = $line;
// }

$str = $input_arr[0];
$text = $input_arr[1];
$count = 0;

for ($i = 0; $i < mb_strlen($text); $i++) {
  // 文字列の$i番目から１文字を$cに代入
  $checkStr = mb_substr($text, $i, mb_strlen($str));
  if ($str === $checkStr) {
    $count ++;
  }
}

echo $count;
