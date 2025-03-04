<?php 

session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){

include "./../includes/header.php";





include "./../includes/footer.php";

} else {

    header("location:./../public/login.php");
    exit;
}