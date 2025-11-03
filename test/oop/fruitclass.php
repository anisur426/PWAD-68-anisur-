<?
class fruit
{
    public $name;
    public $color;
}
$fruitObj = new fruit;

$fruitObj->name = "mango";
$fruitObj->color = "green";

$fruitObj2 = new  fruit;
$fruitObj2->name = "jackfruit";
$fruitObj2->color = "yellow";

var_dump($fruitObj);
