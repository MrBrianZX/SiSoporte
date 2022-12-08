<?php 
    session_start(); 
    unset($_SESSION['USER']);
    session_unset();
    session_destroy();
    header("Location: ../main/index.php");
?>