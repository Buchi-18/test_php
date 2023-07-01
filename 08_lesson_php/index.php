<?php
// ***********************************
// BINGO
// ***********************************

$input_arr = [];

// //テスト用
$file = dirname(__FILE__) . '/input.txt';
$input_arr = file($file, FILE_IGNORE_NEW_LINES);


// //実装用
// while( ($line = fgets(STDIN)) !== false){
// $input_arr[] = $line;
// }


$aList = explode(" ", trim($input_arr[0]));
$bList = explode(" ", trim($input_arr[1]));

// print_r($aList);
// print_r($bList);

$found = true;
foreach ($bList as $num) {

  if (!in_array($num, $aList)) {
    $found = false;
    break;
  } 
}

if ($found) {
  echo "Yes";
} else {
  echo "No";
}


// $bingo = array();
// for ($i = 0; $i < 3; $i++) {
//   $bingo[] = str_split($input_arr[$i]);
// }
// $bingo_line = 0;

// // 横ビンゴ
// $bingo_line += ($bingo[0][0] == '#' && $bingo[0][0] == $bingo[0][1] && $bingo[0][1] == $bingo[0][2]) ? 1 : 0;
// $bingo_line += ($bingo[1][0] == '#' && $bingo[1][0] == $bingo[1][1] && $bingo[1][1] == $bingo[1][2]) ? 1 : 0;
// $bingo_line += ($bingo[2][0] == '#' && $bingo[2][0] == $bingo[2][1] && $bingo[2][1] == $bingo[2][2]) ? 1 : 0;

// // 縦ビンゴ
// $bingo_line += ($bingo[0][0] == '#' && $bingo[0][0] == $bingo[1][0] && $bingo[1][0] == $bingo[2][0]) ? 1 : 0;
// $bingo_line += ($bingo[0][1] == '#' && $bingo[0][1] == $bingo[1][1] && $bingo[1][1] == $bingo[2][1]) ? 1 : 0;
// $bingo_line += ($bingo[0][2] == '#' && $bingo[0][2] == $bingo[1][2] && $bingo[1][2] == $bingo[2][2]) ? 1 : 0;

// // 斜めビンゴ
// $bingo_line += ($bingo[0][0] == '#' && $bingo[0][0] == $bingo[1][1] && $bingo[1][1] == $bingo[2][2]) ? 1 : 0;
// $bingo_line += ($bingo[0][2] == '#' && $bingo[0][2] == $bingo[1][1] && $bingo[1][1] == $bingo[2][0]) ? 1 : 0;

// echo $bingo_line;


// $n = intval($input_arr[0]);
// $S = $input_arr[1];
// $T = $input_arr[2];
// $S_array = str_split($S);
// $T_array = str_split($T);
// $is_bool = true;


// for ($i=0; $i < $n; $i++) { 
//   if(strpos($S,$T[$i]) === false){
//     $is_bool = false;
//     break ;
//   }
// }

// if ($is_bool) {
//     echo "Yes";
// } else {
//     echo "No";
// }
