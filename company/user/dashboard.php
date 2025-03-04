<?php 

include "./../includes/header.php";

session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){


 echo " Welcome " . $_SESSION['name'];

 echo "<a href='./logout.php'>Logout</a>";

} else {

    header("location:./../public/login.php");
    exit;
}