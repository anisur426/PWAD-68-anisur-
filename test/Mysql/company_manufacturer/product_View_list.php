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
</head>
<body>
    <h3 style="color:green; font-size:35px; font-style:italic;"><b>product View</b></h3>
    <table>

    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>company</th>
    </tr>
    <?php 
    $sql="SELECT * FROM product_ list";
    $rawdata=$db->query($sql);
    while($row =$rawdata->fetch_assoc());
    ?>
    <tr>
        <td><?php echo $row ['id']?></td>
        <td><?php echo $row ['name']?></td>
        <td><?php echo  $row ['price']?></td>
        <td><?php echo $row ['company'] ?></td>
    </tr>
    <?php endwhile; ?>
    </table>
</body>
</html>

