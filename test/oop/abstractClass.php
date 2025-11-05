<?php
abstract class abstractClass
{
    public $name;
    public $address; // Declare the address property
    function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address; // Assign the correct variable
    }
    abstract function profile();
}

class childClass extends abstractClass
{
    function profile()
    {
        $details = "";
        $details .= "name: " . $this->name . "<br>";
        $details .= "address: " . $this->address . "<br>"; // Fixed variable name
        return $details;
    }
}

$obj1 = new childClass("Audi", "Tanore");
echo $obj1->profile();
