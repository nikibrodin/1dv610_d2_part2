
<?php


require_once("drawing.php");
require_once("HangMan.php");

session_start();

//if they haven't started a game yet let's load one.
if (!isset($_SESSION['hangman'])) {
    $_SESSION['hangman'] = new HangMan();
}

$hiddenWord = $_SESSION['hangman']->getHiddenWord();

$inputCharacter = $_POST["inputCharacter"];

$view = $drawing[0];
$counter = 0;

if (!$_SESSION['hangman']->isMatch($inputCharacter)) {
    $counter .= 1;
    $view = $drawing[$counter];
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf8'>
        <title>Software Metrics</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" maxlength="1" name="inputCharacter"></textarea>
            <input type="submit">
        </form>
        <?php
            //show metrics
            echo $view;
            echo $hiddenWord;
            echo $isMatch;
		?>
    </body>
</html>

