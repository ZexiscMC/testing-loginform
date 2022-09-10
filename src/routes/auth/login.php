<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/auth/css/login.css">
    <script>
        function registerClick() {
            window.location = "http://localhost:3000/auth/register.php"
        }
    </script>
    <title>Please login...</title>
</head>
<body>
    <div class="cntr">
        <div class="title">
            <span><strong>PLEASE LOGIN!</strong></span>
        </div>
        <form>
            <div class="ipt">
                <span><strong>Username</strong></span>
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
              <span class="register" onclick="registerClick()"><strong>Don't have an account? <a href="http://localhost:3000/auth/register.php" onclick="registerClick()">Create one!</a></strong></span>
            </div>
        </form>
    </div>
</body>
</html>