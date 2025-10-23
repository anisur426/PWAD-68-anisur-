<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $_GET $_POST$_REQUEST
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";
    ?>
    <h3>Registration</h3>
    <form action="" method="post">
        <input type="text" name="FullName" placeholder="Enter your name"><br>
        <input type="text" name="Email" placeholder="Enter our Email"><br>
        <input type="text" name="Phone" placeholder="Enter your number"><br>
        <input type="submit" name="submit" value="SUBMIT">


    </form>
</body>

</html>