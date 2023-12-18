<?php

if (isset($_POST['login'])) {
    include 'conn.php';
    session_start();
    $useremail = $_POST['email'];
    $password = $_POST['pass'];
    $user_id = "";
    $user_type = "";

    if (empty($useremail) && empty($password)) {
        header('location: ../login.php');
    } else {
        $sql = "SELECT * FROM `users` WHERE `useremail` = '$useremail' AND `userpassword` = '$password' LIMIT 1;";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);



        if ($row) {
            $_SESSION['loggedin'] = true;
            $_SESSION['userType'] = $row['user_type'];
            $_SESSION['userId'] = $row['user_id'];



            header("location: ../index.php");
        } else {

            echo "<script>alert('Please Enter Correct Email or Password.' )</script>";
            echo "<script>window.open('../login.php','_self')</script>";
        }
    }
}
?>