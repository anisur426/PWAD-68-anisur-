<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    php syntxt
   </h1> 

   <div style="float: left; width: 45%; height: 45px;" >
  <ul>
    <li><?php 
    // php start
    echo "Wellcome to us software<br>";
    ?></li>
     <li>
        <?
 /*it is a multi line 
 comment*/
      $color ="red";
    echo $color;?></li>
    </ul>
   </div>
   <div style="float: left; width: 50%; height: 45px;">
    <ul>
          <li><?=$color; ?></li>
     <li><? echo  "ki j korbo";?></li>
    </ul>  
   
     </div>
</body>
</html>