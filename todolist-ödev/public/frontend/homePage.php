<?php
include "../../scripts/css.php";
include "../../scripts/javaScript.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TO DO LIST</title>
    <style>
        .div {
            margin: 0;
            padding: 0;
            background: #35dc9b;
            background: linear-gradient(to bottom, #35dc9b, #3857af);
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <!--Navbar Başlangıç-->
    <nav class=" navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid ">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown ">
                        <a class=" nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../../images/user.png" alt="Logo" width="7%;" height="68%">
                            Profile
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="uyeKayit.php">Register</a></li>
                            <li><a class="dropdown-item" href="uyeGiris.php">Login</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="list.php">To Do List</a></li>
                            <li><a class="dropdown-item" href="homePage.php">Home Page</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar Bitiş-->
    <div class="div">

    </div>

</body>

</html>