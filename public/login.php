<?php
    session_start();

    if (isset($_SESSION["user_email"])) {
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <heading>
            <h1><strong> <a href="index.php">TechWiz</a></strong></h1>
            <a href="index.php"><img id="logo" src="../src/img/techwizlg.png"></a> 
    </heading>
    <div class="form-box">
        <form id="loginForm" class="form-value" method="get" onsubmit="loginSubmit(event)">
            <h2>Sign in</h2>
            <div class="input-box">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="email"  required>
                <label>Email</label>
            </div> 
            <div class="input-box">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="password"  required>
                <label>Password</label>
            </div>
            <div class="forget">
                <label for=""><input type="checkbox">Remember me&emsp;&emsp;&emsp;&emsp;<a href="#">Forget Password?</a></label>
            </div>          
            <input type="submit" name="btnsignin" class="btn" value="Sign In"/>
            <div class="register">
                <p>Don't have an account?<a href="register.php"> Sign up here</a></p>
            </div>
        </form>
    </div>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="../src/js/authenticate.js"></script>
</body>
</html>


