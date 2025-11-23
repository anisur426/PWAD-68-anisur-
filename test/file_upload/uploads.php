<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>File Upload PHP</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" name="upload" value="Upload">
    </form>

    <?php
    if (isset($_POST['upload'])) {
        //echo "<pre>";
        // print_r($_FILES);
        //echo "<br>";
        // echo $_FILES['myfile']['size'];
        // echo "<br>";
        $filename = $_FILES['myfile']['name'];
        $destination = "files/" . $filename;

        $temfile = $_FILES['myfile']['tmp_name'];
        $filsize = $_FILES['myfile']['size']; //byte
        $maxsize = 1048576; //1mb;
        $errors = array();
        echo $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ["jpg", "jpeg", "png"];

        if ($filsize > $maxsize) {
            $errors[] = "<h>file is too large</h>";
        }
        if (! in_array($ext, $allowed)) {
            $errors[] = "<h>  jpg,png and jpeg is allowed </h>";
        }
        if (count($errors) > 0) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        } else {
            move_uploaded_file($temfile, $destination);
            echo "<h> upload successfully</h>";
        }
    }
    ?>

</body>

</html>