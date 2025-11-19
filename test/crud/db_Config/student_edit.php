<?php include_once("db_config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM employees WHERE employeeID='$id'";
    $rowdata = $conn->query($sql);
    // print_r($rowdata);
    $row = $rowdata->fetch_object();
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        extract($_POST);
        $sql = "UPDATE employees SET first_name='$Fname',last_name='$Lname' ,birthdate='$dob',notes='$notes' WHERE employeeID='$id'";
        $conn->query($sql);
        header("Location:index.php");
    }
    ?>

    <h2>student edit </h2>
    <form action="" method="post">
        <input type="text" name="Fname" placeholder="Enter first name" value="<?php echo $row->first_name; ?>"><br>
        <input type="text" name="Lname" placeholder="Last Name" value="<?php echo $row->last_name; ?>"><br>
        <input type="date" name="dob" placeholder="Enter Date" value="<?php echo $row->birthdate; ?>"><br>
        <textarea name="notes" placeholder="Enter notes"><?php echo $row->notes; ?></textarea><br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" name="submit" value="UPDATE">
    </form>

</body>

</html>