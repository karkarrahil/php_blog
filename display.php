<?php
include 'connect.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div>

        <a href="index.php" class="btn btn-primary">ADD</a>
    </div>
    <table class="table mt-4 ">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">username</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from user";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $username = $row['username'];
                    $email = $row["email"];
                    $password = $row['password'];
                    echo '
                        <tr>
                        <th>'.$id.'</th>
                        <td>'.$username.'</td>
                        <td>'.$email.'</td>
                        <td>'.$password.' </td>
                        <td><a href="update.php?up_id='.$id.'"> <button>edit</button></a>
                        <a href="delete.php?id='.$id.'"> <button>delete</button></a>
                        </td>
                        </tr>
                    ';
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>