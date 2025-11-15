<?php  
class Student{
    public $name;
    public $age;
function read (){
echo "his read a book";

}
}

$Student1 = new Student();
$Student1->name= "rahman";

echo"Student Name:".$Student1->name."<br>";
$Student1->read();  
?>