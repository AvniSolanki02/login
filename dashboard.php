<?php
require_once "./conn1.php";

if(!isset($_SESSION['logindata'])){
    header("location:login.php");
}
    // //echo "WELCOME";
    // // echo "<pre>";
    // print_r($_SESSION);
    
    echo  $_SESSION['logindata']['id'] . "<br>"; 
    echo "welcome ". $_SESSION['logindata']['uname']. "<br>";
    echo  $_SESSION['logindata']['email']. "<br>";
    echo  $_SESSION['logindata']['pass'] . "<br>";
?>
<br>

<form action="./logout.php">
<button type="submit">log out</button>
</form>