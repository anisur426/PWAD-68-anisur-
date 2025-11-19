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
    $sql = "SELECT * FROM employees ORDER BY employeeID  desc";
    $result = $conn->query($sql);


    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>First</th>
            <th>Last</th>
            <th>Birth date</th>
            <th>Notes </th>
            <th colspan="2"> Action</th>
        </tr>

        <?php
        while ($row = $result->fetch_object()) {
        ?>
            <tr>
                <td><?php echo $row->employeeID; ?></td>
                <td><?php echo $row->first_name; ?></td>
                <td><?php echo $row->last_name; ?></td>

                <td><?php echo $row->birthdate; ?></td>
                <td><?php echo $row->notes; ?></td>


                <td> <a href="student_edit.php?id=<?php echo $row->employeeID; ?>">Edit</a></td>
                <td><a onclick="retrun confrim('are you sure to delete')" href="student_delete.php?id=<?php echo $row->employeeID ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br><br>
    <a href="student_entryt.php">student list</a>




</body>

</html>