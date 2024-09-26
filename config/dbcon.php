<?php 

$host = "localhost";
$username = "root";
$password = "";
$database = "phpecom";

//creating db connection

$con = mysqli_connect($host, $username, $password, $database);

//check db connection

if(!$con){
    die("connection failed". mysqli_connect_error());
}
// else{
//     echo "Connected Successfully";
// }
?>