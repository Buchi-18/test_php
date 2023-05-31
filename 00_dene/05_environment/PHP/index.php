<?php

//階層が同じ場合の.envファイルの呼び出し

require __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

echo $_ENV['TEST_PASS'];

