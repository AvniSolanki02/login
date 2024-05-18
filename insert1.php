<?php require_once "./conn1.php";

if (isset($_POST['signup'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password= $_POST['password'];


    $query = "INSERT INTO `reg`(`uname`,`email`,`pass`) VALUES('$username','$email','$password')";
   $result = mysqli_query($conn, $query);

  if ($result) {
    ?>
    <script>
     alert("data saved successfully");
      window.location.href = "loggin.php"
    </script>

    <?php
  } else {
    echo "Insert error";
  }

}

?>