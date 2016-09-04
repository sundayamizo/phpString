<?php
//check if string is empty or not

$string = "wwwwwww";

echo (!isset($string) || trim($string) == "")? "Empty!":"Not Empty! Contains: <i>$string</i>";

//now empty the string
$string = "";

if(!isset($string)||trim($string)=="")
    echo "<br/>empty!";
else
    echo "<br/>not empty!";
?>
