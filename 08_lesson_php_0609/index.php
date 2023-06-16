<?php

$input_arr = [];

//テスト用
$file = dirname(__FILE__) . '/input.txt';
$input_arr = file($file, FILE_IGNORE_NEW_LINES);


// //実装用
// while( ($line = fgets(STDIN)) !== false){
// $input_arr[] = $line;
// }

list($seat_num, $group_num) = explode(' ', $input_arr[0]);

// echo $seat_num . PHP_EOL;
// echo $group_num . PHP_EOL;
// グループ分ループ
for ($i = 0; $i < $group_num; $i++) {
  $num = $i + 1;
  list($group_person_num, $sit_point) = explode(' ', $input_arr[$num]);
  $seat = array_pad(array(), $seat_num, 0);
  echo $group_person_num . PHP_EOL;
  echo $sit_point . PHP_EOL;
  // 空席調べて
  for ($j = $sit_point; $j < $sit_point + $group_person_num; $j++) {
    # code...
  }

  // 空いてたら着席
}

// 出力
