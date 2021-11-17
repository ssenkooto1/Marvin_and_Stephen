<?php  
//Connect to the server and database
include 'connection.php';
session_start();
//Pick CREATE ACCOUNT data from HTML forms sent through AJAX
$f_location 	= $_POST['f_location']; 
$f_address = $_POST['f_address'];
$f_profilepic = $_POST['f_profilepic'];
$f_whatsappphoneno = $_POST['f_whatsappphoneno'];

$id = $_SESSION['id'];
//INSERT DATA INTO USER ACCOUNTS TABLE
// $sql_query = "INSERT INTO signup (`profile_pic`, `first_name`, `last_name`, `business_name`, `phone_no`, `location`, `address`, `password`) 
// 				VALUES ('$f_profilepic','$f_firstname', '$f_lastname', '$f_businessname', '$f_phoneno', '$f_location', '$f_address', '$f_password');";

//Fetch for rows that match username and given password
$sql_query ="SELECT * FROM signup WHERE signupid ='$id'";
$result = mysqli_query($con, $sql_query);
$row_cnt = mysqli_num_rows($result); 

//$queryStatus = "Username and Password don't match.";
if($row_cnt>0){
	echo "Success";
	session_start();
	$user_res = mysqli_fetch_assoc($result);
    $whatsapp_no=$user_res['whatsapp_no'];
    $location=$user_res['location'];
    $address=$user_res['address'];
    $profile_pic=$user_res['profile_pic'];

    $sql_update = "UPDATE `signup` SET `whatsapp_no` ='$whatsapp_no', `location` ='$location',
                    `address` ='$address', `profile_pic` ='$profile_pic'  WHERE `signupid` ='$id'" ;
    $result_update = mysqli_query($con, $sql_update);       
    echo "Business Profile Update";                           
}
else{
	echo "Username and Password don't match.";
} 

?>