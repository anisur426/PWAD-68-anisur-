<?php include_once('db_config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        tr,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>


<body>
    <div>
        <h>Entry Manufacturer</h>
    </div>
    <br> <br>
    <form action="" method="post">
        <label>Name:</label>
        <input type="next" name="name" placeholder="enter your name"> <br><br>
        <label>Address:</label>
        <textarea name="address" cols="15" rows="3"></textarea><br><br>

        <label> Contact-No:</label>
        <input type="number" name="contact_no" placeholder="enter your number"><br><br>
        <input type="submit" name="submit" value="submit">


    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $contact_no = $_POST['contact_no'];
        $sql = "CALL Manufacturer_insert ('$name','$address','$contact_no')";
        $db->query($sql);
        if ($db->affected_rows) {
            echo "<h4>Manufacturer Add Sfuccessfully</h4>";
        }
    }

    ?>

    <h2>Carunt Manufacturer</h2>
    <table>
        <tr>
            <th>Manufacturee ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>contact_no</th>

            <th>action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM manufacturer";
        $rawData = $db->query($sql);
        while ($row = $rawData->fetch_assoc()):
        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['contact_no'] ?></td>
                <td><a href="deleter.php?id=<?php echo $row['id']; ?>">delete</a></td>

            </tr>
        <?php endwhile; ?>
    </table>
    <br><br>
    <a href="product.php"><h2>Show product list</h2></a>
</body>

</html>