<?php

if (isset($_POST['signup'])) {
    require_once 'conn.php';
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $usertype = $_POST['user_type'];
    $password = $_POST['pass'];
    $gender = $_POST['gender'];
    $file = $_FILES['user_profile'];



    $filename = $file['name'];
//$fileerror = $file['error'];
    $filetmp = $file['tmp_name'];

//$fileexplode = explode('.', $filename);
//$filecheck = strtolower(end($fileexplode));
//$filetype = array('png', 'jpj', 'jpeg');

    $destinationfile = '../uploads/' . $filename;
    move_uploaded_file($filetmp, $destinationfile);

    $check = "SELECT * FROM `users` WHERE `useremail` = '$email' ";
    $res = mysqli_query($conn, $check);

    if (mysqli_num_rows($res) > 0) {
// output data of each row
        $row = mysqli_fetch_assoc($res);
        if ($email == $row['useremail']) {
            echo "<script>alert('Email Already Exists. Please Use Other email.' )</script>";
            echo "<script>window.open('../signup.php','_self')</script>";
        }
    } else {
        $q = "INSERT INTO `users`(`firstname`, `lastname`, `useremail`, `user_type`, `userpassword`, `gender`, `userimage`) VALUES ('$firstname','$lastname','$email','$usertype','$password','$gender','$destinationfile')";
        $run = mysqli_query($conn, $q);
        if ($run) {

            echo "<script>alert('User Has Been Created Successfully' )</script>";
            echo "<script>window.open('../login.php','_self')</script>";
        } else {
            echo "<script> alert('Unable to add user. Please try again'); </script>";
            echo "<script>window.open('../signup.php','_self')</script>";
        }
    }
    mysqli_close($conn);
}