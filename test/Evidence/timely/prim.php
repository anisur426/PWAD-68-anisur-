<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <label>Entry Number</label>
        <input type="number" name="num" placeholder="enter number"><br>
        <input type="submit" name="submit" value="Check">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];

        if ($num == 0) {
            echo "The Number is zero";
        } elseif ($num == 1) {
            echo "the number is not a prime";
        } elseif ($num == 2) {
            echo "the number is prime";
        } else {
            for ($i = 2; $i < $num; $i++) {
                if ($num % $i == 0) {
                    echo "the number is not a prime";
                    exit();
                }
            }
            echo "the number is prime";
        }
    }


    ?>
</body>

</html>