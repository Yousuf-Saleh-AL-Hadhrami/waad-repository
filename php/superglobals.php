<?php 

date_default_timezone_set('Asia/Muscat');

// Superglobals Or predefined Variables
/*

1 - $_GET  => Used when passing data between pages 
2 - $_POST => passing data between pages though a form
3 - $_REQUEST => [ $_GET , POST ]
4 - $_SERVER  => [ shows information about the client and server]
5 - $_FILES   => [ to upload multi media files ]
5 - $_COOKIE  => [ Piece of data stored in the brower  ]
6 - $_SESSION => [ store data on server and the id will be stored in the browser cookie ]


7 - $GLOBALS
8 - $_ENV

*/

// var_dump($_GET);

// echo "<pre>";
// var_dump($_SERVER);

//setcookie("waad", "I am from Sumail", time() + 3600);

session_start();

$_SESSION['username'] = 'Waad AL Rawahi';
$_SESSION['address'] = 'Sumail';
$_SESSION['is_logged_in'] = true;





// session.gc_maxlifetime=1440

// echo 1440 / 60; 24 Minutes 