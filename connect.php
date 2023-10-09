<?php

// $server  = "localhost";
// $user    = "root";
// $pass      = "";
// $db_name = "blog";

// $conn =  mysqli_connect($server, $user, $pass, $db_name);
// if ($conn) {
//     echo " <p>successfully connected! </p>";
// } else {
//     echo "<p>not successfully connected!<p>";
// }

$conn  = new mysqli('localhost', 'root', '', 'blog');

if ($conn) {
    echo 'connected';
} else {
    echo 'not connected!';
}

?>