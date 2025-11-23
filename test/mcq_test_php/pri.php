<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Checker</title>
</head>

<body>
    <form action="" method="post">
        <label>Input Number:</label>
        <input type="number" name="num" placeholder="Enter number"><br><br>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php


    if (isset($_POST['submit'])) {
        $number = $_POST['num'];
        //echo "checkPrime($number)";
    }
    function checkPrime($num)
    {
        if ($num == 1) return "$num is not a prime number";
        if ($num == 2) return "$num is a prime number";

        $number = [];
        for ($i = 2; $i < $num; $i++) {
            $number[] = $i;
        }

        foreach ($number as $i) {
            if ($num % $i == 0) {
                return "$num is not a prime number"; // composite হলে একবারে return
            }
        }

        return "$num is a prime number"; // loop শেষ হলে prime
    }
    ?>
</body>

</html>