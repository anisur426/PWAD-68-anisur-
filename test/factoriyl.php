<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Check whether a number is prime or not</h3>

    <?php
    if (isset($_REQUEST['submit'])) {
        $mynum = $_REQUEST['mynum'];
        $factorial = 1;

        // find out factorial
        for ($x = 1; $x <= $mynum; $x++) {
            $factorial *= $x;
        }

        echo "Factorial of $mynum is: $factorial";
    }
    ?>

    <form action="">
        <input type="number" name="mynum" placeholder="Enter your number"><br>
        <input type="submit" name="submit" value="CHECK">
    </form>

</body>

</html>