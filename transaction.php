<?php

    include "connect.php";

    /*$kode_trans = "SELECT no_transaksi FROM tbltransaksi WHERE no_transaksi = '$_GET[vehiclecode]'";
    $result = mysqli_query($connect, $kode_trans);
    $test = mysqli_fetch_array($result); */

    $query = "SELECT * FROM tbltransaksi 
    INNER JOIN (tblmobil INNER JOIN tblPemilik USING(no_ktp_pemilik) ) USING (kode_mobil) 
    INNER JOIN tblPelanggan USING (no_ktp_pelanggan) 
    WHERE no_transaksi = '$_GET[code]'";
    
    $pickup = "SELECT tgl_pinjam FROM tbltransaksi WHERE no_transaksi = '$_GET[code]'"; 
    $hasil = mysqli_query($connect, $pickup);
    $baris = mysqli_fetch_array($hasil);

    $date = "SELECT datediff(day, $baris, $return)";
    
    $return = "SELECT tgl_kembali FROM tbltransaksi WHERE no_transaksi = '$_GET[code]'";
    
    echo $date;
    
    // echo "$query";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
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
                        <a href="index.html" class="navbar-logo"></a>
                        <a class="logo" href="index.php" class="logo">Makmur <em>Jaya</em> </a>
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
                <form action="transaction.php" method="POST">
                <div class="kartu-book">
                    <div class="book">
                        <h2>Transaction</h2>
                    </div>
                    <div class="foto-mobil">
                        <div class="foto-car-transaksi">
                            <div class="foto">
                                <img src="https://hondaautobest.co.id/images/gallery_cars_color/jazz-poptt.png" type="image/png"/>
                            </div>
                        </div>
                    </div>
                    <div class="bon">
                        <div class="detail">
                            <div>
                                <label>Transaction Code :</label><br>
                                <span><?php echo $row['no_transaksi'] ?></span>
                            </div>
                            <div>
                                <label>Name :</label>
                                <span> <?php echo $row['nama_pelanggan']  ?></span>
                            </div>
                            <div>
                                <label>Vehicle Code :</label>
                                <span> <?php echo $row['kode_mobil'] ?></span>
                            </div>
                            <div>
                                <label>Pick-Up Date :</label>
                                <span> <?php echo $row['tgl_pinjam'] ?></span>
                            </div>
                            <div>
                                <label>Return Date :</label>
                                <span> <?php echo $row['tgl_kembali']?></span>
                            </div>
                            <div>
                                <label>Vehicle Type :</label>
                                <span> <?php echo $row['tipe_mobil'] ?></span>
                            </div>
                            <div>
                                <label>Vehicle Gearbox :</label>
                                <span> <?php echo $row['transmisi'] ?></span>
                            </div>
                            <div>
                                <label>Number of Seats :</label>
                                <span> <?php echo $row['kursi_penumpang'] ?></span>
                            </div>
                            <div>
                                <label>Owner's Name :</label>
                                <span> <?php echo $row['nama_pemilik'] ?></span>
                            </div>
                            <div>
                                <label>Price :</label>
                                <span> <?isi php ?></span>
                            </div>
                        </div>
                        <div class="pilihan1">
                            <div class="column">
                                <?php echo "<a href='transaksi_delete.php?hapus=$row[no_transaksi]'>CANCEL</a>" ?>
                            </div>
                        </div>
                        <div class="pilihan2">
                            <div class="column">
                            <?php echo "<a href='transaksi_update.php?code=$row[no_transaksi]'>UPDATE</a>" ?>
                            </div>
                        </div>
                        <div class="pilihan3">
                            <div class="column3">
                                <a href="pay.php">PAY</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                </form>
            </div>
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


