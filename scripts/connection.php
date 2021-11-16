<?php
//error_reporting(0);

$host_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "marvintheseller";
$con = mysqli_connect($host_name,$user_name, $password, $db_name);
if(!$con)
{
    echo "connection failed ".mysqli_error();
 }
function fetch_query($sql_query){
    global $con;
    $result = mysqli_query($con,$sql_query);
    return mysqli_fetch_array($result);
    
}
