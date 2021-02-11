<?php
session_start();
if (!$_SESSION['email']) {
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Phone Book</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="display-2 text-center">Phone Book</p>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="./index.php">PhoneBook</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto justify-content-center">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home <i class="fas fa-house-user"></i></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="./contact.php">Contacts <i class="fas fa-list-alt"></i></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="logout.php">Logout <i class="fas fa-sign-out-alt"></i> </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>