<?php

require_once "connection.php";

$email = $_POST["email"];
$password = $_POST["password"];

$userDataSelecet = "select * from user where email = ?";

$query = $connection->prepare($userDataSelecet);
$query->execute([$email]);

while ($row = $query->fetch()) {
    echo $row['email'] . "<br />";  
}


// $user = $userControl->fetch_assoc();

if ($userDataSelecet) {
    header("Location : http://localhost/Ödev/todolist-ödev/public/frontend/list.php?state=1");
    exit();
} else {
    header("Location : http://localhost/Ödev/todolist-ödev/public/frontend/uyeGiris.php?state=0");
    exit();
}
