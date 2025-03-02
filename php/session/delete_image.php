<?php

session_start();

if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true){

    $image = $_GET['image'];

   if(file_exists(__DIR__.'/uploads//'.$image)){

     unlink(__DIR__.'/uploads//'.$image);
     

   } else {

    echo "not exists";
   }
}