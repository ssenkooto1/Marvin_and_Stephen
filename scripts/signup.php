<?php  
//Connect to the server and database
include 'connection.php';

//Pick CREATE ACCOUNT data from HTML forms sent through AJAX
$f_firstname 	= $_POST['f_firstname']; 
$f_lastname = $_POST['f_lastname'];
$f_phoneno	= $_POST['f_phoneno'];
$f_businessname	= $_POST['f_businessname'];
// $f_location	= $_POST['f_location']; 
// $f_address	= $_POST['f_address'];
$f_password	= $_POST['f_password']; 
// $f_profilepic	= "232";  //$_POST['f_profilepic']; 




//INSERT DATA INTO USER ACCOUNTS TABLE
// $sql_query = "INSERT INTO signup (`profile_pic`, `first_name`, `last_name`, `business_name`, `phone_no`, `location`, `address`, `password`) 
// 				VALUES ('$f_profilepic','$f_firstname', '$f_lastname', '$f_businessname', '$f_phoneno', '$f_location', '$f_address', '$f_password');";

$sql_query = "INSERT INTO signup (`first_name`, `last_name`, `business_name`, `phone_no`, `password`) 
				VALUES ('$f_firstname', '$f_lastname', '$f_businessname', '$f_phoneno', '$f_password');";

if(mysqli_query ($con, $sql_query)){
	$i=1;
	$queryStatus = "Account Successfully Created";
}

echo $queryStatus;
//0 - Failed To Create Account
//1 - 

?>