<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Link to Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styling to center the form */
        body,
        html {
            height: 100%;
        }

        .login-container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>

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

    session_start();

    $users = [

        ['id' => 1, 'username' => 'admin', 'password' => password_hash('admin', PASSWORD_DEFAULT)],
        ['id' => 2, 'username' => 'waad', 'password' => password_hash('123456', PASSWORD_DEFAULT)]

    ];

    if ($_SERVER['REQUEST_METHOD'] === "POST") {

        $username = $_POST['username'];
        $password = $_POST['password'];

        foreach ($users as $user) {

            if ($user['username'] == $username) {

                if (password_verify($password, $user['password'])) {

                    $_SESSION['username'] = $user['username'];
                    $_SESSION['is_logged_in'] = true;

                    header("location:dashboard.php");
                    exit;
                }
            } 

                echo "Username or password is incorrect";
        }
    }





    ?>


    <!-- Bootstrap 5 JS and Popper (Optional for form functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>