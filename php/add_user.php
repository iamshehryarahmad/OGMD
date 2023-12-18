<?php

if (isset($_POST['add_user'])) {
    include 'conn.php';
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $gender = $_POST['gender'];
    $file = $_FILES['user_profile'];
    $usertype = $_POST['user_type'];



    $filename = $file['name'];
//$fileerror = $file['error'];
    $filetmp = $file['tmp_name'];

//$fileexplode = explode('.', $filename);
//$filecheck = strtolower(end($fileexplode));
//$filetype = array('png', 'jpj', 'jpeg');

    $destinationfile = '../uploads/' . $filename;
    move_uploaded_file($filetmp, $destinationfile);


    $q = "INSERT INTO `users`(`firstname`, `lastname`, `useremail`, `user_type`, `userpassword`, `gender`, `userimage`) VALUES ('$firstname','$lastname','$email','$usertype','$password','$gender','$destinationfile')";
    $run = mysqli_query($conn, $q);
    if ($run) {
        echo "<script>alert('User Has Been Added Successfully' )</script>";
        echo "<script>window.open('../add_user.php','_self')</script>";
    } else {
        echo "<script>alert('User Not Added, Please Try Again.' )</script>";
        echo "<script>window.open('../add_user.php','_self')</script>";
    }
//    if (in_array($filecheck, $filetype)) {
//  }
}
?>

