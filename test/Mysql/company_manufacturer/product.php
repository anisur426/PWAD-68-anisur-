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
    <form action="" method="post">
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>price</th>
                <th>company</th>
            </tr>
            <?php
            $sql = "SELECT * FROM product_list";
            $rawData = $db->query($sql);
            while ($row = $rawData->fetch_assoc()):
            ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['company'] ?></td>

                </tr>
            <?php endwhile; ?>


        </table>

    </form>
</body>

</html>