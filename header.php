<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yooga life | Life style Login Se connecter</title>
    <link rel="icon" href="img/new-yooga-up.1.jpg">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,100;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/brands.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/solid.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"><!-- scroll button top -->
    <link rel="stylesheet" href="js/main.js">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.html"><img src="img/new-yooga.1.png" alt="logo-brand"></a>
                </div>
                    <div class="nav-ul-li">
                        <nav>
                            <ul id="MenuItems">
                                <li><a href="index.html">Acceuil</a></li>
                                <li><a href="practice.html">Practice</a></li>
                                <li><a href="teachers.html">A propos</a></li>   
                                <?php
                                if (isset($_SESSION["useruid"])) {
                                    echo'<li><a href="profile.php">Profile page</a></li>';
                                    echo'<li><a href="includes/logout.inc.php">Log out</a></li>';
                                }
                                else {
                                    echo'<li><a href="signup.php">Sign up</a></li>';
                                    echo'<li><a href="login.php">Log in</a></li>';
                                }
                                ?>                             
                            </ul>
                        </nav>
                    </div>
                    <!-- <a href=""><img  class="cart" src="img/cart.png"  alt="cart"></a> -->
                <img src="img/menu.png" class="menu-icon" onclick="menutoggle()" alt="menu">
                <!-- <i class="fab fa-opencart"></i> -->
            </div>
    </div>