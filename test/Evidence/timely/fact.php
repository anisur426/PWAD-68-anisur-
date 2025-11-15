<form method="post">
    <label for=""> Enter Number:</label>
    <input type="number" name="num"><br>
    <input type="submit" name="submit" value="Check">
</form>

<?php
if (isset($_POST["submit"])) {
    $num = $_POST["num"];
    $fact = 1;

    for ($i = $num; $i >= 1; $i--) {
        $fact = $fact * $i;
    }

    echo "Factorial of $num is: $fact";
}
?>
