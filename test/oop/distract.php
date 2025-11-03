<?php
class fruit
{
    public $name;
    public $color;
    function __construct($name)
    {
        echo "hello" . $name . "<br>";
    }
    function __distruct()
    {
        echo "Bye Bye";
    }
}

new  fruit("anis");
