<?php 

session_start();

if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true){

 echo "Welcome " . $_SESSION['username'];

 echo "<a href='Images.php'>Images</a>";
 echo "<a href='logout.php'>Logout</a>";

?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
<label for="image">Upload Image</label>
<input type="file" name="image" id="image">
<input type="submit" value="Upload Image">
</form>


<?php 

$path = __DIR__ . './uploads/';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $name = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];

    $name = strtolower($name);
    $exploded_name = explode(".", $name);
    $extension = end($exploded_name);

    $full_name = rand(1, 100000).".".$extension;

    $fullPath = $path . $full_name;

    //echo $fullPath;

    if(move_uploaded_file($tmp , $fullPath )){

        echo "Image Has Been Uploaded Successfully";
    } else {

        echo "failed to upload the image";
    }


}


} else {

    header("location:login.php");
    exit;
}