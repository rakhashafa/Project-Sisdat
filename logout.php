<?php
    // unset($_SESSION['submit']);
    // session_destroy();
    // session_start();
    // session_unset();
    // session_destroy();
    // header('location:login.php');
    // exit();

    session_start();
    session_destroy();
    header("location:index.php");
?>