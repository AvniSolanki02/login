<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "loggin";

$conn = mysqli_connect($hostname,$username,$password,$database);

if(mysqli_connect_errno())
{
    echo "Database Connection Error...";
    die();

}

session_start();

?>