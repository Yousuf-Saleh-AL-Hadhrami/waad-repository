<?php 

session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){

include "./../includes/header.php";
include "./../includes/dbconnect.php";


$page = isset($_GET['page']) ? $_GET['page'] : 'Index';

echo "<div class='container'>";

if($page == "Index"){

    echo "<h1 class='text-center text-primary py-3'> Users </h1>";

    // $query = " SELECT * FROM users";

    // $query = " SELECT * FROM departments INNER JOIN 
    //            users ON users.dept_id = departments.id ";  // with join

    $query = " SELECT departments.name AS dname , users.* FROM users INNER JOIN 
               departments ON users.dept_id = departments.id ";

    $result = mysqli_query($connection , $query);

    echo '<a href="users.php?page=Create" class="btn btn-primary btn-sm">Create</a>';

    if(isset($_SESSION['success'])){

        echo "<p class='alert alert-success py-3'> $_SESSION[success] </p>";
        unset($_SESSION['success']);
    }
    echo "<table class='table table-bordered w-100 mx-auto text-center  mt-2'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th> ID </th>";
    echo "<th> Name </th>";
    echo "<th> Department </th>";
    echo "<th> Role </th>";
    echo "<th> Action </th>";
    echo "</tr>";
    echo "<thead>";


    while($rows = mysqli_fetch_assoc($result)) {

        echo "<tr>";
        echo "<td>". $rows['id'] ."</td>";
        echo "<td>". $rows['name'] ."</td>";
        echo "<td>". $rows['dname'] ."</td>";
        echo "<td>". $rows['role'] ."</td>";
        echo "<td>";
        echo "<a href='users.php?page=Edit&id=$rows[id]' class='btn btn-primary btn-sm me-1'>Edit</a>";
        echo "<a href='users.php?page=Delete&id=$rows[id]' class='btn btn-danger btn-sm'>Delete</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";


} elseif($page == 'Create'){ 
    
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'] , PASSWORD_DEFAULT);
        $role = $_POST['role'];
        $dept_id = $_POST['dept_id'];

        $query = " INSERT INTO users (`id` , `name` , `username` , `password` , `role` , `dept_id` )
                   VALUES 
                   (NOT NULL , '$name' , '$username' , '$password', '$role' , $dept_id);
                   ";

        $status = mysqli_query($connection , $query) or die(mysqli_error($connection));


        if($status){
        
            $_SESSION['success'] = 'User Has Been Created Successfully!';
            header("location:users.php?page=Index");
            exit;

        } else {

            echo "failed";
        }

    }
    
    
    
    
    
    
    
    
    
    
    
?>

   
        <div class="container mt-5">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0 text-center" >Craete User</h4>
                </div>
                <div class="card-body">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" >
                        </div>
                        
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" >
                        </div>
    
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" >
                        </div>
    
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" id="role" name="role" >
                                <option value="">Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
    
                        <div class="mb-3">
                            <label for="dept_id" class="form-label">Department</label>
                            <select class="form-select" id="dept_id" name="dept_id" >
                                <option value="">Select Department</option>
                                <?php 
                                $sql = " SELECT * FROM departments";
                                $res = mysqli_query($connection , $sql);

                                while($rows = mysqli_fetch_assoc($res)){

                                    echo "<option value ='$rows[id]'>$rows[name]</option>";
                                }
                                ?>
                            </select>
                        </div>
    
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
   
    
<?php
} elseif($page = "Edit"){

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $dept_id = $_POST['dept_id'];

        $query = " UPDATE users SET `name` = '$name' ,
                                    `username` = '$username' ,
                                    `password` = '$password' ,
                                    `role` = '$role' ,
                                    `dept_id` = $dept_id 
                                     WHERE id = $id";

        $status = mysqli_query($connection , $query) or die(mysqli_error($connection));


        if($status){
        
            $_SESSION['success'] = 'User Has Been Updated Successfully!';
            header("location:users.php?page=Index");
            exit;

        } else {

            echo "failed";
        }

    }
    

    $id = isset($_GET['id']) ? $_GET['id'] : intval($_GET['id']);

    $query = " SELECT users.* , departments.id , departments.name AS dname FROM users INNER JOIN departments
               ON users.dept_id = departments.id WHERE users.id = $id ";
    $result = mysqli_query($connection , $query);

    $rows = mysqli_fetch_assoc($result);

?>

   
        <div class="container mt-5">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0 text-center" >Edit User</h4>
                </div>
                <div class="card-body">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= $rows['name']; ?>">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $id ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $rows['username']; ?>">
                        </div>
    
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="<?= $rows['name']; ?>">
                        </div>
    
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" id="role" name="role" >
                                <option value="">Select Role</option>
                                <option value="admin" <?php if($rows['role'] == "admin") echo "selected "; ?>>Admin</option>
                                <option value="user" <?php if($rows['role'] == "user") echo "selected "; ?>>User</option>
                            </select>
                        </div>
    
                        <div class="mb-3">
                            <label for="dept_id" class="form-label">Department</label>
                            <select class="form-select" id="dept_id" name="dept_id" >
                                <option value="">Select Department</option>
                                <?php 
                                $sql = " SELECT * FROM departments";
                                $res = mysqli_query($connection , $sql);

                                while($row = mysqli_fetch_assoc($res)){

                                    echo "<option value ='$row[id]'";
                                          if($rows['id'] == $row['id']) echo " selected";
                                    echo ">$row[name]</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
}


echo "</div>";


include "./../includes/footer.php";

} else {

    header("location:./../public/login.php");
    exit;
}