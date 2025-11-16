<?php 
$arr=["anis"=>"24","mim"=>"23","alfaz"=>"27","asik"=>"23"];
ksort($arr);
foreach($arr as $name=>$age)
echo $name .":".$age."<br>";


?>