<?php

require_once "connection.php";

$name = $_POST["name"];
$surname = $_POST["surname"];
$email = $_POST["mail"];
$password = $_POST["password"];

$userInsert  = "insert into user (name,surname,email,password) values (?,?,?,?)";
$query = $connection->prepare($userInsert);
$result = $query->execute([$name, $surname, $email, $password]);

if ($userInsert) {
    header("Location : http://localhost/Ödev/todolist-ödev/public/frontend/uyeGiris.php?state=1");
    exit();
} else {
    header("Location : http://localhost/Ödev/todolist-ödev/public/frontend/uyeKayit.php?state=0");
    exit();
}

?>