<?php 

session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){

include "./../includes/header.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'Index';

echo "<div class='container'>";

if($page == "Index"){

echo "<h1 class='text-center text-primary py-3'> Dashboard </h1>";


echo "</div>";

include "./../includes/footer.php";


}

} else {

    header("location:./../public/login.php");
    exit;
}


