<?php include_once("../inc/db_config.php");
$id = $_GET['stid'];
$sql = "DELETE FROM employees WHERE employeeID='$id'";
$conn->query($sql);
if ($conn->affected_rows) {
    session_start();
    $_SESSION['msg'] = "Successfully Deleted";
}

print_r($_SESSION);
//header("Location:index.php");
