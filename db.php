<?php

$Server = "localhost";
$username = "root";
$password = "";
$dbname = "ram_evl";

$conn = new mysqli($Server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
