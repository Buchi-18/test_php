<?php

//２階層下にある場合の.envファイルの呼び出し

 //vendorディレクトリの階層を指定する
require dirname(__FILE__).'/../../vendor/autoload.php';
//.envの階層を指定する
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__. '/../..'); 
$dotenv->load();

echo $_ENV['TEST_PASS'];

