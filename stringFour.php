<?php
$string = " this is a                string with     lots of  embedded whitespace";
echo $string;
echo "<br/>but now....<br/>";
echo ereg_replace('[[:space:]]+', '', trim($string));

?>
