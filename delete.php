<?php

include "connect.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `user` WHERE id='$id' ";  //load data from the databaseKeep this
    if ($result = mysqli_query($conn, $sql)) {
        header('location:display.php');
    }
}
