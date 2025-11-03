<?php
class fruit
{
    public $name;
    public $color;
    function __construct($name)
    {
        echo "hello" . $name . "<br>";
    }
}

new  fruit("anis");
