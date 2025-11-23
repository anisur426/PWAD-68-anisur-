<?php 
//$arr=["anis"=>"24","mim"=>"23","alfaz"=>"27","asik"=>"23"];
//ksort($arr);
//foreach($arr as $name=>$age)
//echo $name .":".$age."<br>";

$array=["Bangladesh"=>"dhaka","pakistan"=>"islamabad","nepal"=>"khatmundu"];
ksort($array);
foreach ($array as $country=>$capital){
echo  $country.":".$capital ."<br>";

}

?>
