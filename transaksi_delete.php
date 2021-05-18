<?php
 include "connect.php";

    if(isset($_GET['hapus'])){
        mysqli_query($connect, "DELETE FROM tbltransaksi WHERE no_transaksi = '$_GET[hapus]'");
        echo "Data Telah Terhapus"; 
        echo "<meta http-equiv=refresh content=0;URL='home.php?'>";
    }
    
?>