<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="./../node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<h1 class="text-center">Users</h1>

<a href="create_user.php" class="btn btn-outline-info">Add User</a>
    <table class="table table-bordered text-center mt-3">
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
                    <a href="edit.php?id=1" class="btn btn-primary">Edit</a>
                    <a href="delete.php?id=1" class="btn btn-danger">Delete</a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Waad</td>
                <td>Sumail</td>
                <td>
                    <a href="edit.php?id=2"  class="btn btn-primary">Edit</a>
                    <a href="delete.php?id=2" class="btn btn-danger">Delete</a>
                </td>
            </tr>

        </tbody>

        <tfoot>
            <tr>
                <td colspan="4"> Footer </td>
            </tr>
        </tfoot>
    </table>

    
</body>
</html>