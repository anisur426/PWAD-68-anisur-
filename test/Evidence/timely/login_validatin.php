<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
<label for="" > Name:</label>
<input type="text" name="fullname" id="name"><br>
<label for="">Email:</label>
<input type="text" name="email" id="eamil"><br><br>
<input type="submit" name="submit" value="registaation">

    </form>
    <?php  
if (isset($_POST["submit"])){
$name = ($_POST["fullname"]);
$email=($_POST["email"]);
$errors=[];
if (strlen($name)<4||strlen($email)>8){
$errors[]="name must be between 4 to 8 character <br>";
}
if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors[]="invalid your email address '@'";
}
if (!empty($errors)){
    foreach($errors as $error){
        echo $error."<br>";
    }
   
}
 else{
        echo "registration done<br>";
        echo"Name:$name<br>";
        echo "Email:$eamil<br>";
    }
}

?>
</body>
</html>