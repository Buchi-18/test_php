<?php
require("../app/functions.php");
createToken();
define("FILENAME", "../app/messages.txt");


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    validateToken();
    $message = trim(filter_input(INPUT_POST, "message"));
    $message = $message !== "" ? $message : "...";

    $fp = fopen(FILENAME, "a");
    fwrite($fp, $message . "\n");
    fclose($fp);

    header("Location: http://localhost/00_work/03_web_dev/work/web/result.php");

    exit;
}

// 8b55c65023e1cb71470805c1a6a3c6c61e6354a283657d55adcb1b6cec2c147e
// 8b55c65023e1cb71470805c1a6a3c6c61e6354a283657d55adcb1b6cec2c147e

$messages = file(FILENAME, FILE_IGNORE_NEW_LINES);

include("../app/_parts/_header.php");
?>

<ul>
  <?php foreach ($messages as $message): ?>
  <li><?= h($message); ?></li>
  <?php endforeach; ?>
</ul>

<form action="" method="post">
  <input type="text" name="message">
  <input type="hidden" name="token"
    value="<?= h($_SESSION["token"]) ?>">
  <button>Post</button>
</form>

<?php
include("../app/_parts/_footer.php");
?>