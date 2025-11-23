<?php
$arr = ["Bangladesh" => "Dhaka", "Pakistan" => " Islamabad", "Afghanistan" => "Kabul", "China" => "Beijing", "japan" => "Tokyo"];
krsort($arr);
//rsort($country);
foreach ($arr as $key => $value) {
    echo $key . ":" . $value . "<br>";
}
