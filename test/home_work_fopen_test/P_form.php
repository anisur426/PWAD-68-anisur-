<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
<label>Product name:</label>
<input type="text" name="name"><br>
<label>Product price:</label>
<input type="text" name="price"><br>
<label>product size:</label>
<input type="text" name="size">


</form>
<?php
include "./class.php";
if(isset($_POST["price"])){
    $name=$_POST["name"];
    $price=$_post["price"];
    $code=$_post["code"];
      $product = new Product($name, $price);
    $product->calculateDiscount();
    $product->saveToFile("./data.txt");

    
}
echo "<hr>";
    echo "<b>Product name:</b> {$product->name}<br>";
    echo "<b>product price:</b> ৳{$product->price}<br>";
    echo "<b>discount:</b> Tk{$product->discount}<br>";
    
?>
</body>
</html>