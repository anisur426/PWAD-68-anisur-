<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "company";
$db= new mysqli($host, $user, $password, $database);
if ($db->connect_error) {
    die("connection failed:" . $db->connect_error);
}
?>