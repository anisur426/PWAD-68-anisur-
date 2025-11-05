<?php

class goodMorning
{
    const myMsg = "we are larning php er oop";
    const myMsg2 = "we are about constant oop";
    function info()
    {
        echo self::myMsg2;
    }
}
echo goodMorning::myMsg;
echo "<br>";
$obj1 = new goodMorning;
$obj1->info();
