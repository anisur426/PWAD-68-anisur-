<?php
class Fruit
{
    public $name;
    public $color;

    // Constructor: দুইটা প্যারামিটার
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    // Method: info দেখানোর জন্য
    function info()
    {
        echo "Name: " . $this->name . ",Color: " . $this->color . "<br>";
    }
}

class Grape extends Fruit
{
    function message()
    {
        echo "I am function inside Grape class<br>";
    }
}

// Object তৈরি
$obj1 = new Fruit("Apple", "Red");
$obj1->info();

$obj2 = new Grape("Orange", "Yellow");
$obj2->info();
$obj2->message();
