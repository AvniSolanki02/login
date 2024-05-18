<?php require_once "./conn1.php";

if(isset($_SESSION['logindata'])){
    header("location:dashboard.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <span class="bg-animate"></span>
        <span class="bg-animate2"></span>

        <div class="form-box login">
            <h2 class="animation" style="--i:0; --j:21; ">LOGIN</h2>

            <form action="loginuser.php" method="POST">

                <div class="input-box animation" style="--i:1; --j:22;">
                    <input type="text" name="uname" required>
                    <label>username</label>
                    <i class='bx bx-user'></i>
                </div>
                <div class="input-box animation" style="--i:2; --j:23;">
                    <input type="password"  name="pass" required>
                    <label>password</label>
                    <i class='bx bx-lock-alt'></i>
                </div>
                <button type="submit" name="loggin" class="btn animation" style="--i:3; --j:24;">LOGIN</button>
                <div class="logreg-link animation" style="--i:4; --j:25;">
                    <p>Don't have an account? <a href="#" class="register-link" >Sign Up</a></p>
                </div>
            </form>
        </div>
        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:20; ">welcome back</h2>
            <p class="animation" style="--i:1; --j:21;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
        </div>

        <div class="form-box register">
            <h2 class="animation" style="--i:17;  --j:0;">SIGN UP</h2>
            <form action="insert1.php" method="POST">
                <div class="input-box animation" style="--i:18;  --j:1;">
                    <input type="text" name="username" id="username" required>
                    <label>username</label>
                    <i class='bx bx-user'></i>
                </div>

                <div class="input-box animation" style="--i:19;  --j:2;">
                    <input type="text" name="email" id="email"required>
                    <label>Email</label>
                   
                    <i class='bx bxs-envelope'></i>
                </div>

                <div class="input-box animation" style="--i:20;  --j:3;">
                    <input type="password" name="password" id="password" required>
                    <label>password</label>
                    <i class='bx bx-lock-alt'></i>
                </div>
                <button type="submit" name="signup" class="btn animation" value="signup" style="--i:21;  --j:4;">SIGN UP</button>
                <div class="logreg-link animation" style="--i:22;  --j:5;">
                    <p>Alredy have an account? <a href="#" class="login-link">Login</a></p>
                </div>
            </form>
        </div>
        <div class="info-text register">
            <h2 class="animation" style="--i:17; --j:0;">welcome back</h2>
            <p class="animation" style="--i:18; --j:1;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>