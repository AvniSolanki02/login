<?php require_once "./conn1.php";
 
  if(isset($_POST['loggin'])){

    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $query="SELECT * FROM `reg` WHERE `uname`='$uname' AND `pass`='$pass'";
    $result=mysqli_query($conn,$query);

    if($result){
        if(mysqli_num_rows($result)>0){
         
          $data=mysqli_fetch_assoc($result);

          $_SESSION['logindata']=$data;
          
            // echo "loggin success";
            ?>
            <script>
                alert("loggin successfully");
                window.location.href = "dashboard.php"
                </script>


            <?php
        }
        else{
            
            // echo "Invalid username or password";
            ?>
            <script>
                alert("Invalid username or password");
                window.location.href = "loggin.php"
                </script>
                <?php
        }
    }
  
  }
?>
