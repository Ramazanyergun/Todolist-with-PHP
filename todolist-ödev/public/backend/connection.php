<?php

try {

    $hostName = "localhost";
    $dbName = "todolist";
    $dbUserName = "root";
    $dbPassword = "";

    $connection = new PDO("mysql:host=$hostName;dbname=$dbName", $dbUserName, $dbPassword);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "Database connection is failed <br>";
    echo "Error: " . $e->getMessage();
    die();
}
