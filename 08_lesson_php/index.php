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
$seat = array_pad(array(), $seat_num, 0);
$count = 0;

// グループ分ループ
for ($i = 0; $i < $group_num; $i++) {
  $num = $i + 1;
  $empty_flg = true;
  list($group_person_num, $sit_point) = explode(' ', $input_arr[$num]);
  $sit_point--;
  // 空席調べて
  for ($j = $sit_point; $j < $sit_point + $group_person_num; $j++) {
    if ($seat[$j % $seat_num] > 0) {
      $empty_flg = false;
      break;
    }
  }
  // 空いていたら着席
  if ($empty_flg) {
    for ($j = $sit_point; $j < $sit_point + $group_person_num; $j++) {
      $seat[$j % $seat_num]  = 1;
      $count++;
    }
  }
}


// 出力
// print_r($seat);
echo $count . PHP_EOL;
