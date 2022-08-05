<?php

use Hyper\Hyper;

$host = "sql6.freemysqlhosting.net";
$username = "sql6509604";
$password = "E9IdvRQdvc";
$database = "sql6509604";
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