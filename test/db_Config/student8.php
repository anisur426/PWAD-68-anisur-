<?php include_once "db_config.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student</title>

    <style>
        table,
        tr,
        td,
        th {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>

    <?php
    $sql = "SELECT * FROM employee ORDER BY employeeID  desc";
    $result = $conn->query($sql);


    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>First</th>
            <th>Last</th>
            <th>Birth date</th>
        </tr>

        <?php
        while ($row = $result->fetch_object()) {
        ?>
            <tr>
                <td><?php echo $row->employeeID; ?></td>
                <td><?php echo $row->first_name; ?></td>
                <td><?php echo $row->last_name; ?></td>
                <td><?php echo $row->birthdate; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br><br>
    <a href="student_entryt.php">student list</a>




</body>

</html>