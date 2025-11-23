<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label>Enter number</label>
        <input type="number" name="num" placeholder="enter number"><br>
        <input type="submit" name="submit" value="Check">

    </form>
    <?php
if(isset($_POST['submit'])){
    $input=$_POST['num'];
    $fact=1;
    $number=range(1,$input);
    foreach  ($number as $n){
  $fact*=$n;
    }
  echo $fact;

}

?>
</body>
</html>