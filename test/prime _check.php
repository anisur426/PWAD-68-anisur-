<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>this  is a prime cheack </h2>
    <?php
if(isset($_POST["submit"])){
    $Mynum=$_POST["Mynum"];
    if ($Mynum==1){
        echo "$Mynum is not a prime number";
exit;
    }
if ($Mynum==2){
        echo "$Mynum is a prime number";
    exit;
    }
  elseif   ($Mynum>2){
     for($x=2; $x<$Mynum;$x++){
        if($Mynum%$x==0){
            echo "$Mynum is a  not a prime number";
exit;
        }
    }

     }

     echo "$Mynum is a prime number";
 
}
?>
<form action="" method="post">

<input type="number" name="Mynum" placeholder="Input your Number"><br>
<input type="submit" name="submit" value="check">

</form>
</body>
</html>