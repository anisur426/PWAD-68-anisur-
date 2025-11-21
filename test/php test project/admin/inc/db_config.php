<?php

$host = "localhost";
$user = "root";
$password = "";
$database  = "test_db";

$right = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $right->connect_error);
}


//echo "Connection successful!";

$control_URL = "http://localhost/PWAD-68(anis)/test/php%20test%20project/admin/";

//$conn->close();
