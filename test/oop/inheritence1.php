<?php
class fruit
{
    public $name;
    public $color;
    function __construct($name, $color)
    {

        $this->name = $name;
        $this->color = $color;
    }
    function info()
    {
        echo "name: " . $this->name . " , color: " . $this->color . "<br>";
    }
}

class grape extends fruit
{
    function message()
    {
        echo "i am function  inside grape  class";
    }
}
$obj1 = new fruit("apple", "red");
$obj1->info();
$obj2 = new grape("orannge", "yellow");
$obj2->info();
$obj2->message();
