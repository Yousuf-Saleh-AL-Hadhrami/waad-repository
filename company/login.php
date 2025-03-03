<?php 

include "./includes/header.php";

?>


<div class="login-container">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                    <!-- Username Field -->
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">
                    </div>

                    <!-- Password Field -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
        </div>
    </div>

<?php

include "./includes/dbconnect.php";

session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $username = $_POST['username'];
    $password = $_POST['password'];


    $query = " SELECT * FROM users WHERE username = '$username' LIMIT 1 ";
    $result = mysqli_query($connection , $query);
    $user = mysqli_fetch_assoc($result);

    if($user){

        if(password_verify($password , $user['password'])){

            $_SESSION['username'] = $user['username'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['logged_in'] = true;

            if($_SESSION['role'] === 'admin'){

                header("location:admin/dashboard.php");
                exit;

            } else {

                header("location:user/dashboard.php");
                exit;
            }

        } else {

            echo "Failed to Login";
        }
    }

    
}




include "./includes/footer.php";


