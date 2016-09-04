<?php
$char = isset($_POST['char']) ? $_POST['char'] : '';
if(isset($_POST['submit']))
{
    $asc = ord($char);
    echo $asc;
}
?>
<form action="asciiConvert.php" method="post">
<label>Enter any character: </label>
<input type="text" name="char"/>
<input type="submit" name="submit">
</form>


<br/>-----<br/>
<?php
$asc = isset($_POST['asc']) ? $_POST['asc'] : '';
if(isset($_POST['submit1']))
{
    $char = chr($asc);
    echo $char;
}
?>
<?php



?>
<form action="asciiConvert.php" method="post">
<label>Enter any ASCII character: </label>
<input type="text" name="asc"/>
<input type="submit" name="submit1">
</form>

