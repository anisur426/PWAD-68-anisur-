<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <label> Sari:</label>
    <input type="number" name="price">
    <input type="submit" value="check">
    
</form>
<?php

if (isset($_POST["price"])){
    $price =$_POST["price"];
    if($price>1200){
        echo"20% discount";
    }else if ($price>600){
        echo"12% discount";
    }
else{
    echo"no discount";
}
}
?>

</body>
</html>