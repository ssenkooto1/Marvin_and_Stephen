<?php  
//Connect to the server and database
include 'connection.php';

//Pick CREATE ACCOUNT data from HTML forms sent through AJAX
$lf_username 	= $_POST['lf_username']; 
$lf_password = $_POST['lf_password'];


//INSERT DATA INTO USER ACCOUNTS TABLE
// $sql_query = "INSERT INTO signup (`profile_pic`, `first_name`, `last_name`, `business_name`, `phone_no`, `location`, `address`, `password`) 
// 				VALUES ('$f_profilepic','$f_firstname', '$f_lastname', '$f_businessname', '$f_phoneno', '$f_location', '$f_address', '$f_password');";

//Fetch for rows that match username and given password
$sql_query ="SELECT * FROM signup WHERE phone_no='$lf_username' AND password='$lf_password'";
$result = mysqli_query($con, $sql_query);
$row_cnt = mysqli_num_rows($result); 

//$queryStatus = "Username and Password don't match.";
if($row_cnt>0){
	echo "Success";
	session_start();
	$user_res = mysqli_fetch_assoc($result);
//	$_SESSION['role']=$user_res['role'];
	$_SESSION['id']=$user_res['signupid '];
	//$_SESSION['names']=$user_res['names'];
}
else{
	echo "Username and Password don't match.";
} 

?>