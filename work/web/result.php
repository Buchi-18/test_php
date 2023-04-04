<?php
require("../app/functions.php");
$message = all_trim(filter_input(INPUT_GET, "message"));
$username = all_trim(filter_input(INPUT_GET, "username"));
$text = all_trim(filter_input(INPUT_GET, "text"));

$message = $message !== "" ? $message : "No message";
$username = $username !== "" ? $username : "No name";
$text = $text !== "" ? $text : "No text";

function all_trim($str)
{
    return preg_replace("/(^\s+)|(\s+$)/u", "", $str);
}
include("../app/_parts/_header.php");
?>


<p>
  <?= h($message) ?> by
  <?= h($username) ?>
</p>
<p>
  <?= h($text) ?>
</p>

<p><a href="./index.php">Go back</a></p>



<?php
include("../app/_parts/_footer.php");
?>