<?php
// ***********************************
// harvest
// ***********************************

$input_arr = [];

// //テスト用
$file = dirname(__FILE__) . '/input.txt';
$input_arr = file($file, FILE_IGNORE_NEW_LINES);


// //実装用
// while( ($line = fgets(STDIN)) !== false){
// $input_arr[] = $line;
// }


[$worked_num, $types_num] = explode(' ', $input_arr[0]);
[$row, $col] = explode(' ', $input_arr[1]);
$range = [];
$array = array_fill(0, $row, array_fill(0, $col, '.'));
$harvest = [];

for ($i = 2; $i < $worked_num + 2; $i++) {
  $range = $input_arr[$i];
  [$start_row, $end_row, $start_col, $end_col] = array_map(fn ($value) => $value - 1, explode(' ', $range));
  $type = $range[8];

  for ($j = $start_row; $j <= $end_row; $j++) {
    if ($j >= $row) {
      continue;
    }
    for ($k = $start_col; $k <= $end_col; $k++) {
      if ($k >= $col) {
        continue;
      }
      $target = $array[$j][$k];
      if ($target === '.') {
        $array[$j][$k] = $type;
        continue;
      } else {
        $harvest[] = $array[$j][$k];
        $array[$j][$k] = $type;
      }
    }
  }
}

$harvest = array_count_values($harvest);
ksort($harvest);

foreach ($harvest as $item) {
  echo $item . "\n";
}

foreach ($array as $value) {
  echo implode('', $value) . "\n";
}
