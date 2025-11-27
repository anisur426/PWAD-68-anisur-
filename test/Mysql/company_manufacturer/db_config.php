<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "company";
$db = new mysqli($host, $user, $password, $db);
if ($db->connect_error) {
    die("connection failed:" . $db->connect_error);
}
?>