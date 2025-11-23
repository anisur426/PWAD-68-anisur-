<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
<label for="">Enter your Marks</label>
<input type="number" name="marks" placeholder="Enter your Marks"> <br>
<input type="submit" name="submit" value="Check">

</form>

<?php 
if (isset($_POST['submit'])){
    $marks=$_POST['marks'];
    echo $marks;
    if($marks>=80){
        echo "grade: excellent";

    }else if($marks>=70){
        echo "grade: good";
    }
    else{
        echo "grade:Failure";
    }
    
}
?>
</body>
</html>