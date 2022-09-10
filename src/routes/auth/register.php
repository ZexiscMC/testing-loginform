<?php
include 'D:\Tersu-Development\ColdyStore2B-Main\db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/auth/css/register.css">
    <title>Please register...</title>
    <script>
        function loginClick() {
            window.location = "http://localhost:3000/auth/login.php"
        }
    </script>
</head>
<body>
    <div class="cntr">
        <div class="title">
            <span><strong>PLEASE REGISTER!</strong></span>
        </div>
        <form>
            <div class="ipt">
                <span><strong>Username</strong></span>
                <input type="text">
            </div>
            <div class="ipt">
                <span><strong>Email</strong></span>
                <input type="text">
            </div>
            <div class="ipt">
                <span><strong>Password</strong></span>
                <input type="text">
            </div>
            <a href="" class="submit">
                <span><strong>Submit</strong></span>
            </a>
            <div class="rgstr">
              <span class="login" onclick="loginClick()"><strong>Already have an account? <a href="http://localhost:3000/auth/login.php">Login Here!</a></strong></span>
            </div>
        </form>
    </div>
</body>
</html>