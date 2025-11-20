<?php

$host = "localhost";
$user = "root";
$password = "";
$database  = "test_db";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//echo "Connection successful!";

$control_URL = "http://localhost/PWAD-68(anis)/test/phpProject/admin/";

//$conn->close();
