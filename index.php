<?php

$fp = fopen('names.txt', 'r');

$contents = fread($fp, filesize("names.txt"));
fclose($fp);

echo $contents;
