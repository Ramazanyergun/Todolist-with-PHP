<?php


$hostName = "localhost";
$dbName = "todolist";
$dbUserName = "root";
$dbPassword = "";


$connection = mysqli_connect($hostName, $dbUserName, $dbPassword, $dbName);

if (!$connection) {
    echo "Database connection is failed";
    die();
}
?>