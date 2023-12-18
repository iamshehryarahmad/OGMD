<?php

include 'conn.php';
$user_id = $_GET['id'];
$q = "DELETE FROM `users` WHERE user_id = $user_id";
$run = mysqli_query($conn, $q);
if ($run) {
    echo "<script>alert('User Has Been Deleted Successfully' )</script>";
    echo "<script>window.open('../manage_user.php','_self')</script>";
}
?> 