<?php
//String case control
$string = 'In my Dream, your dreams Come true!';
$toUpper = strtoupper($string);
echo $toUpper;

echo "<br/> but back to all lowercase again....<br/>";

$toLower = strtolower($string);
echo $toLower;

echo "<br/>even  better .... <br/>";

echo ucfirst($string);

echo "<br/>also....<br/>";

echo ucwords($string);

?>
