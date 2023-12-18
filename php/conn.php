<?php  

$servername="localhost";
$username="root";
$password="";
$db="onlinegmd";

$conn=mysqli_connect($servername,$username,$password,$db);
if($conn)
{

	//echo "Successfull";
}else
{
	echo "Connection failed";
}














?>