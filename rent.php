<?php
include "session.php";
include "connect.php";  

if(isset($_POST['submit'])){  
    $pickup = $_POST['pickup'];
    $return = $_POST['return'];
    $kode = $_POST['code'];      
    
    $noktp = "SELECT * FROM tblpelanggan WHERE username = '$_SESSION[id]'";
    $querynoktp = mysqli_fetch_array(mysqli_query($connect, $noktp));

    $insertktp = "INSERT INTO tbltransaksi SET 
    tgl_pinjam = '$pickup',
    tgl_kembali = '$return',
    kode_mobil = '$kode',
    no_ktp_pelanggan = '$querynoktp[no_ktp_pelanggan]'";

    mysqli_query($connect, $insertktp); 

    $idTransaksi = mysqli_insert_id($connect);

    echo "<meta http-equiv=refresh content=0;URL='transaction.php?code=$idTransaksi'>";
} 

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
    
    <link rel="stylesheet" href="assets/css/style.css">
    
    <link rel="stylesheet" href="assets/css/rent.css">

    </head>
        
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <img class="navbar-logo" src="assets/images/logo.png" type="image/png"/>
                        <a href="home.php" class="navbar-logo"></a>
                        <a class="logo" href="home.php" class="logo">Makmur <em>Jaya</em> </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="home.php" >Home</a></li> <!--menu home-->
                            <li><a href="rent.php" class="active">Rent</a></li>                <!--menu MObil-->
                            <li><a href="about.php">About Us</a></li>            <!--menu Transaksi-->
                            <li><a href="logout.php">Logout</a></li>               <!--menu About us-->
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->



        <!-- ***** Main Banner Area Start ***** -->
        <div class="main-banner" id="top">
            <video autoplay muted loop id="bg-video">
                <source src="assets/images/car.mp4" type="video/mp4" />
            </video>
            
            <div class="video-overlay header-text">
                <form action="rent.php" method="POST">
                    <p class="judul">RENT <em>YOUR CAR</em></p>
                    <div class="reserve">

                        <div class="formulir">
                            <div class="pickup">
                                <p>Pick-Up Date</p>
                                <div class="code">
                                    <input  type="date" name="pickup"> 
                                </div> 
                            </div>
                            <div class="return">
                                <p>Return Date</p>
                                <div class="code">
                                    <input  type="date" name="return"> 
                                </div> 
                            </div>

                            <div class="vehi-code">
                                <p>Vehicle Code</p>
                                <div class="code">
                                    <input  type="text" name="code"> 
                                </div>
                            </div>

                        </div>
                        <button type="submit" name="submit" class="rent-btn">RENT</button>

                    </div>
                </form>

                <div class="list-car">
                    <div class="pil1">
                        <div class="foto-car">
                            <div class="name-car">
                                <a>Honda Jazz</a>
                                <div class="sub">
                                    <ul>
                                        <li><h7>Code             : J01</h7></li>
                                        <li><h7>Type             : City Car</h7></li>
                                        <li><h7>Fuel             : Petrol</h7></li>
                                        <li><h7>Gearbox          : Automatic</h7></li>
                                        <li><h7>Number of Seats  : 4</h7></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tag-price">
                                <div class="foto">
                                    <img src="https://hondaautobest.co.id/images/gallery_cars_color/jazz-poptt.png" type="image/png"/>
                                </div>
                                <div class="harga-sewa">
                                    <p>350.000/day</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pil2">
                        <div class="foto-car">
                            <div class="name-car">
                                <a>Honda Jazz</a>
                                <div class="sub">
                                    <ul>
                                        <li><h7>Code             : J02</h7></li>
                                        <li><h7>Type             : City Car</h7></li>
                                        <li><h7>Fuel             : Petrol</h7></li>
                                        <li><h7>Gearbox          : Manual</h7></li>
                                        <li><h7>Number of Seats  : 4</h7></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tag-price">
                                <div class="foto">
                                    <img src="https://hondaautobest.co.id/images/gallery_cars_color/jazz-poptt.png" type="image/png"/>
                                </div>
                                <div class="harga-sewa">
                                    <p>245.000/day</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            </form>
        </div>
        <!-- ***** Main Banner Area End ***** -->
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
        <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/mixitup.js"></script> 
<script src="assets/js/accordions.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>

</body>
</html>

