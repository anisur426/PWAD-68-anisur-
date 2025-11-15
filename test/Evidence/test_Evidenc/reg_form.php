<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login system</title>
</head>

<body>
    <h1>Registration</h1>
    <form action="" method="post">
        <input type="number" name="Id" id="id">
        <input type="submit" name="search" value="search">

    </form>
    <?php
    if (isset($_POST["search"])) {
        include "reg_class.php";
        $id = $_POST["id"];
        $sheet = new student("./std.txt");
        $result = $sheet->result($id);
        echo $result;
    }
    ?>
</body>

</html>