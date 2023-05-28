<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VIT(Vidhyathi Institute of Technology Class)</title>
    <!-- FavIcon -->
    <link rel="icon" href="./IPimages/vitplain.jpeg" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./institute.css" />
    <link rel="stylesheet" href="../institute.css" />
    <!-- Custom inquiry CSS -->
    <link rel="stylesheet" href="./inqury.css" />
    <link rel="stylesheet" href="../inqury.css" />
</head>

<body class="mx-2">
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-0 mt-0 d-flex align-items-center justify-content-between">
        <div>
            <i class="bi bi-telephone"></i>

            <a class="navbar-brand" href="#" style="font-size: small">+91 9730782009</a>
            <i class="bi bi-envelope"> </i>
            <a class="navbar-brand" href="#" style="font-size: small">vitaurangabad@gmail.com</a>
            <i class="bi bi-geo-alt"></i>
            <a class="navbar-brand" href="#" style="font-size: small">Aurangabad-Maharashtra</a>
        </div>

        <div class="d-flex py-2 align-items-center justify-content-between">
            <p>
                <?php
                if (isset($_SESSION['username'])) {
                    echo $_SESSION['username'];
                    echo "<a href='logout.php'>Logout</a>";
                }

                ?>
            </p>
            <a class="navbar-brand p-1" href="./Login-Reg/login.php" style="font-size: small">Login</a>
            <i class="bi bi-person ms-0"></i>
            <a class="navbar-brand p-1" href="./Login-Reg/form.php" style="font-size: small">Signup</a>
        </div>
    </nav>

    <!-- HEADER START -->
    <header>
        <div class="container">
            <img src="/instituteproject/IPimages/vitplain-removebg-preview.png" alt="logo image" />
            <h1 class="header_title">Vidyarthi Institute of Technology</h1>
            <img src="/instituteproject/IPimages/skill_india-removebg-preview.png" alt="" />
        </div>
        <div class="container_head">
            <h2>
                If you want to switch / Build your carrier in IT field So Join us....
            </h2>
        </div>
        <nav class="rounded">
            <ul>
                <li class="navTabs"><a href="./institute.php">Home</a></li>
                <li class="navTabs"><a href="./about_us.php">About_Us</a></li>
                <li class="navTabs"><a href="./courses.php">Courses</a></li>
                <li class="navTabs"><a href="./contact.php">Contact</a></li>
                <li class="navTabs"><a href="./placement.php">Placements</a></li>
                <li class="navTabs"><a href="#contact">Site_Map</a></li>
            </ul>
        </nav>

    </header>
    <!-- HEADER END -->