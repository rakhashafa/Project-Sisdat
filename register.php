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

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/login.css">

    </head>
    
    <body>
        <div class="main-banner" id="top">
            <video autoplay muted loop id="bg-video">
                <source src="assets/images/car.mp4" type="video/mp4" />
            </video>
        </div>
        <div class="video-overlay header-text">

        </div>

    <!-- ***** Register Start ***** -->
    <form action="register.php" method="POST">
    <div class="register-div">
            <div class="sub">
                Register
            </div>
            <div class="formu">
                <div class="name">
                    <svg style="svg-icon" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M18,17H10.5L12.5,15H18M6,17V14.5L13.88,6.65C14.07,6.45 14.39,6.45 14.59,6.65L16.35,8.41C16.55,8.61 16.55,8.92 16.35,9.12L8.47,17M19,3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3Z" />
                    </svg>
                    <input type="text" name="Name" placeholder="Name"/>
                </div>
                <div class="Username">
                    <svg class="svg-icon" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,19.2C9.5,19.2 7.29,17.92 6,16C6.03,14 10,12.9 12,12.9C14,12.9 17.97,14 18,16C16.71,17.92 14.5,19.2 12,19.2M12,5A3,3 0 0,1 15,8A3,3 0 0,1 12,11A3,3 0 0,1 9,8A3,3 0 0,1 12,5M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12C22,6.47 17.5,2 12,2Z" />
                    </svg>
                    <input type="text" name="Username" placeholder="Username"/>
                </div>
                <div class="identity">
                    <svg style="svg-icon" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M2,3H22C23.05,3 24,3.95 24,5V19C24,20.05 23.05,21 22,21H2C0.95,21 0,20.05 0,19V5C0,3.95 0.95,3 2,3M14,6V7H22V6H14M14,8V9H21.5L22,9V8H14M14,10V11H21V10H14M8,13.91C6,13.91 2,15 2,17V18H14V17C14,15 10,13.91 8,13.91M8,6A3,3 0 0,0 5,9A3,3 0 0,0 8,12A3,3 0 0,0 11,9A3,3 0 0,0 8,6Z" />
                    </svg>
                    <input type="text" name="Identity-Card" placeholder="Identity Card"/>
                </div>
                <div class="telephone">
                    <svg style="svg-icon" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z" />
                    </svg>
                    <input type="text" name="Telephone-Number" placeholder="Telephone Number"/>
                </div>
                <div class="address">
                    <svg style="svg-icon" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                    </svg>
                    <input type="text" name="Address" placeholder="Address"/>
                </div>
                <div class="Password">
                    <svg class="svg-icon" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,17A2,2 0 0,0 14,15C14,13.89 13.1,13 12,13A2,2 0 0,0 10,15A2,2 0 0,0 12,17M18,8A2,2 0 0,1 20,10V20A2,2 0 0,1 18,22H6A2,2 0 0,1 4,20V10C4,8.89 4.9,8 6,8H7V6A5,5 0 0,1 12,1A5,5 0 0,1 17,6V8H18M12,3A3,3 0 0,0 9,6V8H15V6A3,3 0 0,0 12,3Z" />    
                    </svg>
                    <input type="password" name="Password" placeholder="Password"/>
                </div>
                <button type="submit" name="submit" class="signup-btn">SIGN UP</button>
                <div class="login">
            <p>Already have an account ?<a href="index.php">Login</a></p>
            </div>
        </div>
    </form>

    <!-- ***** Register End ***** -->

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

<?php

include "connect.php";  

if(isset($_POST['submit'])){  
    $username=$_POST['Username'];
    $pass=$_POST['Password'];       
    $name=$_POST['Name'];
    $telp=$_POST['Telephone-Number'];
    $ktp= $_POST['Identity-Card'];
    $address=$_POST['Address'];

    mysqli_query($connect, "INSERT INTO tblpelanggan SET 
    username = '$username',
    password = '$pass',
    nama_pelanggan = '$name',
    no_telp_pelanggan = '$telp',           
    no_ktp_pelanggan = '$ktp',           
    alamat_pelanggan = '$address'"
    ); 

    echo "AKUN ANDA TERDAFTAR"; } 

?>