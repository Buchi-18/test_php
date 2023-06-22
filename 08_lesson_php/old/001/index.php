<?php

$input_arr = [];

//テスト用
$file = dirname(__FILE__) . '/input.txt';
$input_arr = file($file, FILE_IGNORE_NEW_LINES);


// //実装用
// while( ($line = fgets(STDIN)) !== false){
// $input_arr[] = $line;
// }

[$start, $end] = explode(' ', $input_arr[0]);
$str = $input_arr[1];


for ($i = 0; $i < mb_strlen($str); $i++) {
  // 文字列の$i番目から１文字を$cに代入
  $c = mb_substr($str, $i, 1);
  if ($start - 1 <= $i && $i <= $end - 1 && 'a' <= $c && $c <= 'z') {
    $c = strtoupper($c);
  }
  echo $c;
}





// $c = mb_substr($s, $i, 1);

// echo $str . PHP_EOL;
// echo mb_substr($str, 0, 7) . PHP_EOL;;
// $foo = 'foo';
// $bar = 'bar bar';
// $baz = 'バズ';
// echo mb_strlen($foo) . PHP_EOL;
// echo mb_strlen($bar) . PHP_EOL;
// echo mb_strlen($baz) . PHP_EOL;
// echo strlen($foo) . PHP_EOL;
// echo strlen($bar) . PHP_EOL;
// echo strlen($baz) . PHP_EOL;
