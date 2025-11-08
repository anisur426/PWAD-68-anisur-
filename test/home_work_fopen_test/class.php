<?php
class product{
 public $name;
public $price;
public $discount=0;
public $code;
function __construct($name,$price,$code){
$this->name=$name;
$this->price=$price;
$this->code=$code;
}
function calculateDiscount(){
    if($this->price>1000){
        $this->discount=$this->price*10;
    }else if ($this->price>500){
$this->discount=$this->price*5;

    }else
    {
        $this->discount=0;

    }
    
}
function total(){
    return$this->price-$this->discount;
}
function save($file){
    $line =$this->name."".$this->price."\n";
    file_put_contents($file,$line,FILE_APPEND);
}
}


?>

 
