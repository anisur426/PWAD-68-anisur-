
  

  <?php 
$arr=["Pkistan"=>"Islamabad","japan"=>"tokeyo"];
ksort($arr);
foreach($arr as $coun=>$capital){
    echo $coun .":" .$capital. "<br>";
}
  ?>