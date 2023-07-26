<?php
include "../../scripts/css.php";
include "../../scripts/javaScript.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #35dc9b;
            background: linear-gradient(to bottom, #35dc9b, #3857af);
        }


        .ana-div {
            width: 70%;
            position: relative;
            margin-left: auto;
            margin-right: auto;
        }

        .aciklama-div {
            background-color: #fff;
            text-align: center;
            box-shadow: 5px 16px lightgray;
            border-radius: 7px;
        }

        .ortak-css {
            text-decoration: none;
            text-align: center;
        }

        .form-div {
            width: 75%;
            height: 20rem;
            float: right;
            padding: 10px;
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

    <!--Form başlangıç-->
    <div class="container mt-5">
        <div class="ana-div">
            <div class="row">
                <div class=" col-8 ">
                    <form class="form-div" action="../backend/uyeGirisControl.php" method="post">
                        <div class="row;">

                            <div class=" form-floating mb-3 mt-5">
                                <input id="email" type="email" name="email" placeholder="Mail Adresinizi Gİrin" class="form-control" required>
                                <label for="email" class="form-label ">E-mail</label>
                            </div>

                            <div class=" form-floating mb-3 mt-5">
                                <input id="password" type="password" name="password" placeholder="Şifrenizi Gİrin" class="form-control" required>
                                <label for="password" class="form-label  ">Password</label>

                            </div>
                        </div>
                        <input type="submit" class="btn mb-" style="background-color: #00E89B; float:right" value="Giriş Yap">
                    </form>
                </div>
                <div class="col-4 aciklama-div ortak-css">
                    <div class="mt-5">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis eos mollitia quas quam deserunt harum laborum dolorem,
                        delectus voluptatem iusto earum vero, voluptas in optio excepturi ipsam error? Dicta, aliquid.
                    </div>
                    <a type="submit" href="uyeKayit.php" class="btn my-4" style="background-color: #00E89B;">Üye Ol</a>
                    <a type="submit" href="uyeGiris.php" class="btn my-4" style="background-color: #00E89B;">Giriş Yap</a>
                </div>


            </div>
        </div>
    </div>
    <!--Form bitiş-->

</body>

</html>