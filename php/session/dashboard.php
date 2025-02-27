<?php 

session_start();

if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true){

 echo "Welcome " . $_SESSION['username'];

echo "<a href='logout.php'>Logout</a>";

} else {

    header("location:login.php");
    exit;
}