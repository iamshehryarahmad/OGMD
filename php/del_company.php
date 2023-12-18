<?php

include 'conn.php';
$id = $_GET['id'];
$q = "DELETE FROM `company` WHERE company_id = $id";

$run = mysqli_query($conn, $q);

if ($run) {
    echo "<script>alert('Company Has Been Deleted Successfully' )</script>";
    echo "<script>window.open('../manage_company.php','_self')</script>";
}
?> 