<?

$number = (float)543;
echo $number . "<br>";
var_dump($number);
?>
<hr>
<?


$number = (int)"tody is impotent day";
echo $number . "<br>";
var_dump($number);
?>
<hr>
<?
$txt = (bool)41;
echo $txt . "<br>";
var_dump($txt);
?>
<hr>
<?
$array = (array)23;
echo $array[0] . "<br>";
echo gettype($array);
?>