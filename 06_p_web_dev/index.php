<?php

require_once __DIR__ . '/config.php';

// データベース接続
$pdo = new PDO('mysql:host=' . $host . '; dbname=' . $db_name . '; charset=utf8', $user, $pass);

$sql = 'SELECT * FROM todos ORDER BY id DESC';
$stmt = $pdo->prepare($sql);
$stmt->execute();


//フェッチモード：データ取り出し時の配列の形式を指定する

echo '<h3>PDO::FETCH_BOTH</h3>';
//カラム名と 0 で始まるカラム番号で添字を付けた配列を返す
print_r($stmt->fetch(PDO::FETCH_BOTH));
echo '<br>';
print_r($stmt->fetch(PDO::FETCH_BOTH));
echo '<br>';

echo '<h3>PDO::FETCH_ASSOC</h3>';
//PDO::FETCH_ASSOC:
// このFETCH_MODEを使用すると、連想配列として結果セットのデータを取得できます。カラム名が配列のキーとなり、その値がカラムの値となります。これは、カラム名を利用してデータを取得する際に便利です。
print_r($stmt->fetch(PDO::FETCH_ASSOC));
echo '<br>';
print_r($stmt->fetch(PDO::FETCH_ASSOC));
echo '<br>';

echo '<h3>PDO::FETCH_NUM</h3>';

// PDO::FETCH_NUM:
// このFETCH_MODEでは、数値添字の配列として結果セットのデータを取得します。カラムの順序に基づいてデータにアクセスします。特定のカラムの値を取得する場合や、ループ処理を行う場合に有用です。
print_r($stmt->fetch(PDO::FETCH_NUM));
echo '<br>';
print_r($stmt->fetch(PDO::FETCH_NUM));
echo '<br>';

echo '<h3>PDO::FETCH_OBJ</h3>';
//PDO::FETCH_OBJ:
// このFETCH_MODEを使用すると、結果セットのデータをオブジェクトとして取得できます。各カラムがオブジェクトのプロパティとして表現されます。オブジェクト指向のアプローチでデータを扱いたい場合に便利です。
print_r($stmt->fetch(PDO::FETCH_OBJ));
echo '<br>';
print_r($stmt->fetch(PDO::FETCH_OBJ));
echo '<br>';


// fetch()は1行ずつ結果を処理しますが、fetchAll()は全ての行を一度に取得します。

// echo '<br>';
// while($row1 =$stmt->fetch(PDO::FETCH_ASSOC)){
//   print_r($row1);
//   echo '<br>';
// }





// HOST_NAME_TODOS=localhost
// DB_NAME_TODOS=todos_app_db
// DB_USER_TODOS=root
// DB_PASS_TODOS=root

// -- ターミナルからMAMPのDBへ接続する
// -- cd /Applications/MAMP/Library/bin/
// -- ./mysql -u root -p
// -- password:root (default)

// -- データベースを追加
// -- create database データベース名 default charset utf8;
// -- create database todos_db default charset utf8;

// -- データベースを確認
// -- show databases;

// -- データベースを確認
// -- use データベース名;
// -- use todos_db;