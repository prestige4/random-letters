<?php
session_start();
$input = $_POST['input'];  // the inputted word
$PDF = file_get_contents('wordsBank.txt');
$words = explode( '
' , $PDF );  // all words
require("oop.php");
$litters = str_split($randomString);
if ( in_array( $input , $words ) ) {
    foreach ( str_split($input) as $letter ) {
        if ( in_array($letter , $litters) ) {
            echo "exist";
        }
    }
}
?>