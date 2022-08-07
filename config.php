<?php

use Hyper\Hyper;

$host = "hyper.mysql.database.azure.com";
$username = "pun";
$password = "kk1246935W@WTF";
$database = "hyper";
$con_status = "inactive";

$connect = new mysqli($host, $username, $password, $database);
// Checking Connection
if (mysqli_connect_errno()) {
    printf("Database connection failed: %s\n", mysqli_connect_error());
    exit();
} else {
    $con_status = "active";
}

require "./hyper.php";

$hyper = new Hyper($connect, "SQL");
