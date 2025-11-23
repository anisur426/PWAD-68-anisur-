<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="Photo">
        <input type="submit" name="submit" value="upload">

    </form>
    <?php
    include("file_class.php");
    if (isset($_POST['submit'])) {
        $info = $_FILES['Photo'];
        $obj = new fileClass($info);

        $obj->upload();
    }
    ?>
</body>

</html>