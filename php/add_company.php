<?php session_start();?>
<?php

include 'conn.php';

if (isset($_POST['submit'])) {
    $uid = $_SESSION['userId'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $file = $_FILES['com_profile'];

    $filename = $file['name'];

//$fileerror = $file['error'];
    $filetmp = $file['tmp_name'];
//$fileexplode = explode('.', $filename);
//$filecheck = strtolower(end($fileexplode));
//$filetype = array('png', 'jpj', 'jpeg',);
    $destinationfile = '../uploads/' . $filename;
    move_uploaded_file($filetmp, $destinationfile);



    $q = "INSERT INTO `company`(`name`, `contact`, `address`, `companyimage`,`user_id`) VALUES ('$name','$contact','$address','$destinationfile','$uid')";
    $runcom = mysqli_query($conn, $q);
    if ($runcom) {
        echo "<script>alert('Company Has Been Added Successfully' )</script>";
        echo "<script>window.open('../add_company.php','_self')</script>";
    } else {
        echo "<script>alert('Company Not Added. Try Again')</script>";
        echo "<script>window.open('../add_company.php','_self')</script>";
    }
//if (in_array($filecheck, $filetype)) {
//     }
}
?>