<?php 
    include("conexion.php");
    include("sesion.php");
    if(!isset($_SESSION['admin'])){
        header("Location: principalBodega.php");
    }
?>