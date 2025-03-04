<?php 

session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){

include "./../includes/header.php";
include "./../includes/dbconnect.php";


$page = isset($_GET['page']) ? $_GET['page'] : 'Index';

if($page == "Index"){

    echo "<h1 class='text-center text-primary py-3'> Users </h1>";

    $query = " SELECT * FROM users";
    $result = mysqli_query($connection , $query);

    echo "<table class='table table-bordered w-75 mx-auto text-center'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th> ID </th>";
    echo "<th> Name </th>";
    echo "<th> Role </th>";
    echo "<th> Action </th>";
    echo "</tr>";
    echo "<thead>";


    while($rows = mysqli_fetch_assoc($result)) {

        echo "<tr>";
        echo "<td>". $rows['id'] ."</td>";
        echo "<td>". $rows['name'] ."</td>";
        echo "<td>". $rows['role'] ."</td>";
        echo "<td>";
        echo "<a href='users.php?page=Edit&id=$rows[id]' class='btn btn-primary btn-sm me-1'>Edit</a>";
        echo "<a href='users.php?page=Delete&id=$rows[id]' class='btn btn-danger btn-sm'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

}





include "./../includes/footer.php";

} else {

    header("location:./../public/login.php");
    exit;
}