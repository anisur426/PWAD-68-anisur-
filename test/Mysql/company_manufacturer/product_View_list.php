<?php
include
("db_config.php");
?>
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
    <h3 style="color:green; font-size:35px; font-style:italic;"><b>product View</b></h3>
    <table>

    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>manufacturer_id</th>
    </tr>
    <?php 
    $sql="SELECT * FROM product";
    $rawdata=$db->query($sql);
    while($row =$rawdata->fetch_assoc()):
    ?>
    <tr>
        <td><?php echo $row ['id']?></td>
        <td><?php echo $row ['name']?></td>
        <td><?php echo  $row ['price']?></td>
        <td><?php echo $row ['manufacturer_id'] ?></td>
        
    </tr>
    <?php endwhile; ?>
    </table>
</body>
</html>

