<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="newfile">
        <input type="submit" value="upload" name="upload">
 
</form>
       <?php
        if(isset($_POST["upload"])){
 //echo "<pre>";
       // print_r($_FILES);
        //echo"<br>";
        //echo $_FILES["newfile"]["size"];
        //echo "<br>";
$filename =$_FILES["newfile"]["name"];
$destination="form_filtarinng/".$filename;
$temfile=$_FILES["newfile"]['tmp_name'];
$filesize=$_FILES['newfile']['size'];
$maxsize=524288;
$errors=array();
echo $ext=pathinfo($filename ,PATHINFO_EXTENSION);
$allowed=["jpg","jpeg","gif","png"];
if($filesize>$maxsize){
    $errors []="<h3>your file is large</h3>";
}
if(!in_array($ext,$allowed)){
    $errors[]="<h3>jpg,jpeg,gif and png allowed</h3>";
}
if (count($errors)>0){
foreach($errors as $error)
echo $error. "<br>";
}
else{
 move_uploaded_file($temfile,$destination);
    echo "<h3>upload successful</h3>";
}

        }
       
        ?>

</body>
</html>