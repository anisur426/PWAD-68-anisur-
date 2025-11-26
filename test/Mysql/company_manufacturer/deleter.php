<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "company";
$db = new mysqli($host, $user, $password, $db);
if ($db->connect_error) {
    die("connection failed:" . $db->connect_error);
}
$id = $_GET['id'];
$sql = "DELETE FROM manufacturer WHERE id=$id";
$rawData = $db->query($sql);
if ($db->affected_rows) {
    session_start();
    $_SESSION['Massage'] = "manufacturer succesful";
} else {
    session_start();
    $_SESSION['Massage'] = "failed to deleted  manufacturer";
}
header("Location: Manufacturer.php");
