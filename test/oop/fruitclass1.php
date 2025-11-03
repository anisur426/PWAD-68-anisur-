<?php
class fruit
{
    public $name;
    public $color;
    function set_name($name)
    {
        $this->name = $name;
    }
    function set_color($color)
    {
        $this->color = $color;
    }
    function get_name_()
    {
        return "name:" . $this->name . "<br>" . "color:" . $this->color;
    }
}
$obj1 = new fruit;
$obj1->set_name("apple");
$obj1->set_color("red");
$obj1->get_name_color("");
//var_dump($obj1);
