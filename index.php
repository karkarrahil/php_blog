<?php
include "connect.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "insert into `user` (username,password,email) values ('$username','$password','$email')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "<p>inserted successfully!<p>";
        header('location:login.php');
    } else {
        echo "<p>not inserted!<p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<style>
    body {
        background-color: #f4f4f4;
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        border-radius: 25px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 25px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <div class="container">
        <h2 class="text-center">User Registration</h2>
        <form method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Enter password" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Enter email" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>