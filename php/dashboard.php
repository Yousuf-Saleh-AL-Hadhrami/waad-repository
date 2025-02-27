<?php 

session_start();

if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true){

 echo "Welcome " . $_SESSION['username'] . " you are from  " . $_SESSION['address'];

} else {

    echo " Sorry You are not logged in";

    header("refresh:3; superglobals.php");

    exit;
}