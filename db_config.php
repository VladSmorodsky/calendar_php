<?php

$conn = new mysqli("localhost", "root", "1234", "rest_day");

mysqli_query($conn,"SET NAMES 'utf8'");
mysqli_query($conn,"SET CHARACTER SET 'utf8'");
mysqli_query($conn,"SET SESSION collation_connection = 'utf8_general_ci'");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>