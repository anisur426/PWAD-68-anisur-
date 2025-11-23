<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $student = ["anis" => 78, "tanvir" => 56, "asik" => 25, "salam" => 82];
    echo "<table>";
    echo "<th><th>student name</th><th>score</th></tr>";
    foreach ($student as $name => $score) {
        echo "<tr><td>$name</td><td>$score</td></tr>";
    }
    echo "</table><br>";
    $maxScore = max($student);
    $topstudent = array_search($maxScore, $student);
    echo "$topstudent<br>";
    echo "$maxScore";

    ?>
</body>

</html>