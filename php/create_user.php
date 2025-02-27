<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Information Form</title>
  <!-- Link to Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5">
    <h2>User Information Form</h2>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
      <!-- ID Field -->
      <div class="mb-3">
        <label for="userId" class="form-label">User ID</label>
        <input type="text" name="id" class="form-control" id="userId" placeholder="Enter your ID" required>
      </div>

      <!-- Name Field -->
      <div class="mb-3">
        <label for="userName" class="form-label">Full Name</label>
        <input type="text" name="name" class="form-control" id="userName" placeholder="Enter your full name" required>
      </div>

      <!-- Address Field -->
      <div class="mb-3">
        <label for="userAddress" class="form-label">Address</label>
        <textarea class="form-control" name="address" id="userAddress" rows="3" placeholder="Enter your address" required></textarea>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>


<?php 

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $id = (int) $_REQUEST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];

    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";


}














?>


  <!-- Bootstrap 5 JS and Popper (Optional for form functionality) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>

    
</body>
</html>