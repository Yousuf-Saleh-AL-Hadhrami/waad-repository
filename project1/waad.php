<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waad Website</title>
    <!-- External Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">

    <!-- Internal Style -->
    <style>
        h1{
            background-color: red;
        }
        @media(max-width:500px){

            h1{
                background-color: green;
                color:white;
            }
        }
    </style>
</head>
<body>

<?php 

echo 10 + 20;

?>

<!-- HTML Heading -->

 <!-- Inline Style -->
    <h1>Heading One</h1>
    <h2>Heading Two</h2>
    <h3>Heading Two</h3>
    <h4>Heading Two</h4>
    <h5>Heading Two</h5>
    <h6>Heading Two</h6>

    <p>السلام عليكم<p>

        <!-- Links -->
        <a href="https://www.google.com">Visit Google</a>
        <a href="https://www.youtube.com">Visit Youtube</a>
        <a href="https://www.facebook.com">Visit Facebook</a>
        <a href="https://www.twitter.com">Visit Twiter</a>
        <a href="page2.html">Page2</a>

        
<!-- Amchor tag  -->
        <img src="" alt="" /> 

        <!-- Images -->


        <img src="./images/cat.jpg" alt="Cat1" id="cat1">
        <img src="./images/cat2.jpg" alt="Cat2" id="cat2">

    <hr>

    <caption>HTML Table</caption>
    <table>
        <thead>
            <tr class="table-heading">
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Yousuf AL Hadhrami</td>
                <td>Izki</td>
                <td>
                    <a href="edit.html" class="btn-primary">Edit</a>
                    <a href="delete.html" class="btn-danger">Delete</a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Waad</td>
                <td>Sumail</td>
                <td>
                    <a href="edit.html" class="btn-primary">Edit</a>
                    <a href="delete.html" class="btn-danger">Delete</a>
                </td>
            </tr>

        </tbody>

        <tfoot>
            <tr>
                <td colspan="4"> Footer </td>
            </tr>
        </tfoot>
    </table>

    <hr>

    <div class="login-form">
        <form action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter your username" required>
            </div>
    
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>
            </div>
    
            <input type="submit" value="Login" class="submit-btn">
        </form>
    </div>
    
<script src="./js/main.js"></script>
</body>
</html>