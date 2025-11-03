<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>File Upload PHP</h1>

    <?php
    if (isset($_POST['upload'])) {
        //echo "<pre>";
        // print_r($_FILES);
        $filename = $_FILES['myfile']['name'];
        $destination = "files/" . $filename;
        //echo "<br>";
        // echo $_FILES['myfile']['size'];
        // echo "<br>";
        $temfile = $_FILES['myfile']['tmp_name'];
        $filsize = $_FILES['myfile']['size']; //byte
        $maxsize = 1048576; //1mb;
        $errors = array();
        echo $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ["jpg", "jpej", "png"];

        if ($filsize > $maxsize) {
            $errors[] = "<h1>file is too large</h>";
        }
        if (! in_array($ext, $allowedTypes)) {
            $errors[] = "<h1>  jpg,png and jpeg is allowed </h1>";
        }
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        } else {
            move_uploaded_file($temfile, $destination);
            echo "<h1> upload successfully</h1>";
        }
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" value="Upload" name="upload">
    </form>
</body>

</html>