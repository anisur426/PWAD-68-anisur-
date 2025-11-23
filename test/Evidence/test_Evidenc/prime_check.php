<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
</head>

<body>
    <h3>Check a number is prime or not</h3>

    <form method="post">
        <input type="number" name="mynum" placeholder="Enter your number" required>
        <input type="submit" name="submit" value="CHECK">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $number = $_POST['mynum'];
        echo "<h4>" . checkPrime($number) . "</h4>";
    }
    function checkPrime($num)
    {
        if ($num == 1) return "$num is not a prime number";
        if ($num == 2) return "$num is a prime number";

        // 2 থেকে $num-1 পর্যন্ত array তৈরি
        $numbers = [];
        for ($i = 2; $i < $num; $i++) {
            $numbers[] = $i;
        }

        // foreach দিয়ে চেক
        foreach ($numbers as $i) {
            if ($num % $i == 0) return "$num is not a prime number";
        }

        return "$num is a prime number";
    }


    ?>

</body>

</html>