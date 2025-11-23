<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
if(isset($_POST['submit'])){
    $marks = $_POST['marks'];

    echo "<h3>Your Marks: $marks</h3>";

    if($marks >= 80){
        echo "Grade: A - Excellent";
    }
    else if($marks >= 70){
        echo "Grade: B - Good";
    }
    else if($marks >= 60){
        echo "Grade: C - Fair";
    }
    else if($marks >= 50){
        echo "Grade: D - Poor";
    }
    else {
        echo "Grade: F - Failure";
    }
}
?>

<form method="post">
    Enter Your Marks: 
    <input type="number" name="marks" required>
    <input type="submit" name="submit" value="Check Grade">
</form>

</body>
</html>