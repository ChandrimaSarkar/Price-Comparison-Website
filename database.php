<?php

$hostName = "127.0.0.1";
$dbUser = "root";
$dbPassword = "";
$dbName = "ecommerce";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>