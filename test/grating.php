<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
  $Marks=100;
  if($Marks>=80){
    echo "Excellent";

  }
  elseif($Marks>=70){
    echo "Good";
  }
  elseif($Marks>=60){
    echo "fair";

  }
  elseif($Marks>=50){
    echo "poor";

  }
  else{
    echo "failure";
  }
    ?>
</body>
</html>