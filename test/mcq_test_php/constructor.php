<?php 

class calcul{
    public function  add($s,$v){
        return $s+$v;
    }
    public function multiply($s,$v){
        return $s*$v;
    }
}
$cal= new calcul();
echo "addition".$cal->add(10,15)."<br>";
echo "multiply".$cal->multiply(120,15);
?>