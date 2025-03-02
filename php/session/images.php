<?php

session_start();

if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true){


    $path = __DIR__ . '//uploads/';

    define('PATH', 'http://localhost/Waad/php/session/uploads/');

    $images = scandir($path);
    
    if($images){

    foreach($images as $image){

        if($image != '.' && $image != '..'){

        echo "<img src='". PATH . $image ."' alt='".$image."'/>";
        echo "<a href='delete_image.php?image=".$image."'>Delete</a>";
        // echo filesize( $path.$image);
        echo "<br>";
    }

    }
}


}