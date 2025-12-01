<?php
include("db_config.php");
$id = $_GET['id'];
$sql ="DELETE FROM manufacturer WHERE id=$id";
$db->query($sql);
if ($db->affected_rows) {
    session_start();
    $_SESSION['Message'] = "manufacturer succesful";
} else {
    session_start();
    $_SESSION['Message'] = "failed to deleted  manufacturer";
}
header("Location: Manufacturer.php");
?>
