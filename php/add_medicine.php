<?php session_start();?>
<?php


if (isset($_POST['add_medicine'])) {
    
    include 'conn.php';
    
    $umid = $_SESSION['userId'];
    $medicine = $_POST['name'];
    $company = $_POST['company_name'];
    $formula = $_POST['formula'];
    $alternative = $_POST['alternative'];
    $sideeffects = $_POST['side_effects'];
    $precautions = $_POST['precautions'];
    $usagedetails = $_POST['usage_details'];
    $disease = $_POST['disease'];
    $file = $_FILES['med_profile'];


    $filename = $file['name'];
    //$fileerror = $file['error'];
    $filetmp = $file['tmp_name'];

    //$fileexplode = explode('.', $filename);
    //$filecheck = strtolower(end($fileexplode));
    //$filetype = array('png', 'jpj', 'jpeg');
    //if (in_array($filecheck, $filetype)) {

        $destinationfile = '../uploads/' . $filename;
        move_uploaded_file($filename, $destinationfile);


        $q = "INSERT INTO `medicine`(`name`, `company_name`, `formula`, `alternative`, `side_effects`, `precautions`, `usage_Details`, `disease`, `med_image`, `user_id`) VALUES ('$medicine','$company','$formula','$alternative','$sideeffects','$precautions','$usagedetails','$disease','$destinationfile','$umid')";
        $runmd = mysqli_query($conn, $q);

        if ($runmd) {
            echo "<script>alert('Medicine Has Been Added Successfully' )</script>";
            echo "<script>window.open('../add_medicine.php','_self')</script>";
        } else{
            echo "<script>alert('Medicine Not Added, Please Try Again.' )</script>";
            echo "<script>window.open('../add_medicine.php','_self')</script>";
        }
    //}
}
?>