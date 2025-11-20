<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Factorial Calculator</h2>

    <!-- Input Form -->
    <form method="post">
        <label>Enter a number:</label>
        <input type="number" name="num">
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num']; // Input the number
        $fact = 1;

        // Factorial logic
        for ($i = 1; $i <= $num; $i++) {
            $fact *= $i;
        }

        echo "<h3>Factorial of $num is: $fact</h3>";
    }
    ?>
</body>
</html>
