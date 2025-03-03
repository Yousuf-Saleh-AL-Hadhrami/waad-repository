<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database ="waad";


try {

    $connection = mysqli_connect($hostname , $username , $password , $database);

    // if($connection){

    //     echo "connected to database";
    // }

} catch (Throwable $e){

    echo $e->getMessage();
}