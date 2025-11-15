<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Largest Number</title>
</head>

<body>

    <?php
    if (isset($_POST["submit"])) {


        $input = $_POST["numbers"];


        $arr = explode(",", $input);


        $largest = $arr[0];
        $Lowest = $arr[0];

        foreach ($arr as $num) {
            if ($num > $largest) {
                $largest = $num;
            }
        }

        echo "Largest Number:" . $largest . "<br>";
        echo "lowest Number:$Lowest";
    }
    ?>

    <form action="" method="post">
        <input type="text" name="numbers" placeholder="Enter numbers "><br><br>

        <input type="submit" name="submit" value="Check ">
    </form>

</body>

</html>