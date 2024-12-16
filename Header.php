<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tennis Court Booking">
    <meta name="keywords" content="Tennis, Court, Booking, Sports">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HEADER</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #232f3e;
            padding: 10px 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header__logo {
            margin-left: 160px; /* Reduced margin */
        }

        .header__logo img {
            height: 50px;
        }

        .header__menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
            align-items: center; /* Align items to the center */
        }

        .header__menu ul li {
            margin: 0 15px; /* Adjusted margin */
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .header__menu ul li a {
            color: #fff;
            font-size: 20px;
            text-decoration: none;
            transition: color 0.2s;
        }

        .header__menu ul li a:hover {
            color: #ff9900;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #232f3e;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: #fff;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ff9900;
            color: #232f3e;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .container {
            margin-top: 70px;
        }
    </style>
</head>
<body style="background-color: <?php echo isset($_SESSION['bg_color']) ? $_SESSION['bg_color'] : '#f8f9fa'; ?>;">
    <div class="header" style="background-color: <?php echo isset($_SESSION['header_color']) ? $_SESSION['header_color'] : '#232f3e'; ?>;">
        
        <div class="col-lg-3 col-md-3">
            <div class="header__logo">
                <img src="logo1.png" alt="Logo">
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
        <nav class="header__menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="About.php">About</a></li>
                <div class="dropdown">
                    <li><a href="#">Courts</a></li>
                    <div class="dropdown-content">
                        <a href="Clay_Court.php">Clay Court</a>
                        <a href="Grass_Court.php">Grass Court</a>
                        <a href="Hard_Court.php">Hard Court</a>
                        <a href="Carpet_Court.php">Carpet Court</a>
                        <a href="Packages.php">Book Court</a>
                    </div>
                </div>
                <li><a href="contact.php">Contact</a></li>
                <?php if (isset($_SESSION['user']) || isset($_SESSION['admin'])): ?>
                    <li>
                        <form action="Logout.php" method="post" style="display:inline;">
                            <input type="submit" name="logout" value="Logout" class="btn btn-danger btn-lg" style="font-size:20px;">
                        </form>
                    </li>
                <?php else: ?>
                    <li>
                        <form action="Login.php" method="post" style="display:inline;">
                            <input type="submit" name="login" value="Login" class="btn btn-danger btn-lg" style="font-size:20px;">
                        </form>
                    </li>
                    <li>
                        <form action="Register.php" method="post" style="display:inline;">
                            <input type="submit" name="Register" value="Register" class="btn btn-danger btn-lg" style="font-size:20px;">
                        </form>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div></div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
