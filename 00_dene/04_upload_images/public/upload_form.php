<?php
require_once "../app/dbc.php";
require_once "../app/fn.php";
$files = getAllFile();
?>
<!-- ①フォームの説明 -->
<!-- ②$_FILEの確認 -->
<!-- ③バリデーション -->
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>アップロードフォーム</title>
</head>

<body>
  <form enctype="multipart/form-data" action="./file_upload.php" method="POST">
    <div class="file-up">
      <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
      <input name="img" type="file" accept="image/*" />
    </div>
    <div>
      <textarea name="caption" placeholder="キャプション（140文字以下）" id="caption"></textarea>
    </div>
    <div class="submit">
      <input type="submit" value="送信" class="btn" />
    </div>
  </form>

  <div>

    <?php foreach($files as $file):?>
    <?php
      $get_path = str_replace('/Applications/MAMP/htdocs/', '', $file['file_path']);
        $file_src = "http://localhost:8888/".$get_path;
        ?>
    <img src="<?php echo "{$file_src}"; ?>"
      alt="<?php echo "{$file['id']}_"."画像"; ?>">
    <p><?php echo h("{$file['description']}"); ?>
    </p>
    <?php endforeach; ?>
  </div>


</body>
<style>
  body {
    padding: 30px;
    margin: 0 auto;
    width: 50%;
  }

  textarea {
    width: 98%;
    height: 60px;
  }

  .file-up {
    margin-bottom: 10px;
  }

  .submit {
    text-align: right;
  }

  .btn {
    display: inline-block;
    border-radius: 3px;
    font-size: 18px;
    background: #67c5ff;
    border: 2px solid #67c5ff;
    padding: 5px 10px;
    color: #fff;
    cursor: pointer;
  }

  img {
    width: 100%;
  }
</style>

</html>