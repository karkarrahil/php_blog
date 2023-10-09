<?php
include "connect.php";
$id = $_GET['up_id'];
$sql = "select * from `user` where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
$password = $row['password'];
$email = $row['email'];

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "update `user` set id=$id,username='$username',password='$password', email='$email' where id=$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        // echo "<p>update successfully!<p>";
        header('location:display.php');
    } else {
        echo "<p>not updated!<p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <br>
    <form action="#" method="post">

        <input type="text" value="<?php echo $username; ?>" name="username" placeholder="enter name" />
        <input type="text" value="<?php echo $password; ?>" name="password" placeholder="enter password" />
        <input name="email" value="<?php echo $email; ?>" type="email" placeholder="enter email" />
        <button name="submit">Update</button>
    </form>
</body>

</html>