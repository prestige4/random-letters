<?php
session_start();
$oldScore = $_SESSION['oldScore'];
$score = $_POST['numLetters'];
$_SESSION['oldScore'] = $score + $oldScore;
echo "done";
?>