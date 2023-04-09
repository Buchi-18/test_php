<?php
// ファイル関連の取得
$file = $_FILES['img'];
$filename = $file['name'];
$tmp_path = $file['tmp_name'];
$file_err = $file['error'];
$filesize = $file['size'];

// キャプションの取得
$caption = filter_input(
  INPUT_POST, 'caption',FILTER_SANITIZE_SPECIAL_CHARS);

// キャプションのバリデーション
// 未入力
if(empty($caption)){
  echo 'キャプションを入力してください。';
  echo '<br>';
}
// 140文字以内
if(strlen($caption > 140)){
  echo 'キャプションは140文字以内で入力してください。';
  echo '<br>';
}

// ファイルのバリデーション
// ファイルサイズ
if($filesize > 1048576 || $file_err == 2 ){
  echo 'ファイルサイズは1MB未満にしてください。';
  echo '<br>';
}
// 拡張子は画像形式か
$allow_ext = array('jpg', 'jpeg', 'png');
$file_ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array( strtolower($file_ext), $allow_ext)){
  echo '画像ファイルを添付してください。';
  echo '<br>';
}
// ファイルはあるかどうか
if(is_uploaded_file($tmp_path)){
  echo $filename . 'をアップしました。';
}else{
  echo 'ファイルが選択されていません。';
  echo '<br>';
}

?>
<a href="./upload_form.php">戻る</a>