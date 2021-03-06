<?php
session_start();
include "connect.php"; 

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Makmur Jaya Rental Mobil</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/login.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    
    
    <!-- ***** Login Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/car.mp4" type="video/mp4" />
        </video>
    </div>
    <div class="video-overlay header-text">

    </div>
    <form action="index.php" method="GET"> 
    <div class="login-div">
        <div class="title">Login</div>
        <div class="logos">
            <img src="assets/images/logo.png" typle="image/png" alt="">
        </div>
    
        <div class="form">
            <div class="username">
                <svg class="svg-icon" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z" />
                </svg>
                <input type="text" name="id" placeholder="Username">
            </div>
            <div class="password">
                <svg class="svg-icon" viewBox="0 0 24 24">
                    <<path fill="currentColor" d="M12,17A2,2 0 0,0 14,15C14,13.89 13.1,13 12,13A2,2 0 0,0 10,15A2,2 0 0,0 12,17M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V10C4,8.89 4.9,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z" />    
                </svg>
                <input type="password" name="pw" placeholder="Password">
            </div>
        </div> 
        <button type="submit" name="login" class="signin-btn">LOGIN</button>
        <div class="sign-up">
            <p>Don't have an account ?<a href="register.php">Sign Up</a></p>
        </div>
    </div>
    </form>

    <?php

if(isset($_GET['login'])){
        $sql = mysqli_query($connect, "SELECT * FROM tblpelanggan WHERE username = '$_GET[id]'
        AND password = '$_GET[pw]'");

        $cek = mysqli_num_rows($sql);
        if($cek > 0){
            $_SESSION['id'] = $_GET['id'];
            $_SESSION['pw'] = $_GET['pw'];

            echo "<meta http-equiv=refresh content=0;URL='home.php'>";
        }else{
            echo "<p align= center><b> INVALID DETAILS! </b></p>";
            echo "<meta http-equiv=refresh content=1;URL='index.php'>";
        }
    }
?>
    
    <!-- ***** Login End ***** -->

        <!-- ***** Footer Start ***** -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            Rizky Mahardika - Ariiq Rakha - Muthia Azzahra
                        </p>
                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>


