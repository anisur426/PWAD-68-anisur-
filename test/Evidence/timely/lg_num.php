<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Numbers:
        <input type="nubmer" name="numbers" placeholder="enter your number"><br>
        <input type="submit" name="submit" value="Check">
    </form>
    <?php 
if(isset($_POST['submit'])){
    $input=$_POST['numbers'];
    $arr=explode(",",$input);
    $largest=$arr[0];
    $lowest=$arr[0];
    foreach($arr as $num){
        if($num>$largest){
            $largest=$num;
        }
    }
    echo $largest ."<br>";
    echo $lowest;
}
    ?>
</body>
</html>