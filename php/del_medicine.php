<?php

include 'conn.php';
$id = $_GET['id'];
$q = "DELETE FROM `medicine` WHERE med_id = $id";
$run = mysqli_query($conn, $q);

if ($run) {
    echo "<script>alert('Medicine Has Been Deleted Successfully' )</script>";
    echo "<script>window.open('../manage_medicine.php','_self')</script>";
}
?> 