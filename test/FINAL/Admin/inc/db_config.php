<?php

$host = "localhost";
$user = "root";
$password = "";
$database  = "bpmsdb";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

ob_start();
//echo "Connection successful!";

$control_URL = "http://localhost/PWAD-68(php)/test/FINAL/admin/";
?>