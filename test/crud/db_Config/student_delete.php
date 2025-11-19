<?php

$id = $_GET['id'];
$sql = "DELETE FROM employees WHERE employeeID='$id'";
include_once("db_config.php");
$conn->query($sql);
header("Location:index.php");
