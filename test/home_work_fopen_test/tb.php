<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>product name:</label>
        <input type="text" name="name" required><br>
        <label>product price:</label>
        <input type="number" name="price"requied><br>
        <input type="submit" value="cheack price">


</form>
<?php
if (isset($_POST["price"])){
    $name =$_POST["name"];
    $price =$_POST["price"];
    $discount=0;
    if($price>1000){
        $discount =$price*0.10;
        echo"your geating 10% discount";

    }
    else if($price>800) {
        $discount=$price*0.05;

 echo"your geting 7% discount";
    }else{
        " your getting  no discount";
    }
    $total =$price-$discount;
    echo"<hr>";
    echo"<b> product name:</b> $name<br>";
    echo "<b> original price<b>:$price<br>";
    echo "<b>discount:$discount<br>";
    echo "<b> total price:$total<br>";
    

}

?>
</body>
</html>