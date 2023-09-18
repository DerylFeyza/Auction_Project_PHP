<?php include 
"header.php" 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/loginstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="login-container" id="login-container">
    <div class="form-container log-in-container">
    <form action="proses_login.php" method="post">
        <h1>Login</h1>
        <div class="social-container">
        <a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
        <a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
        </div>
        <span>or use your account</span>
        <input type="text" name="username" value="" class="form-control"/>
        <input type="password" name="password" id="password" class="form-control" />
        <input type="checkbox" id="showPassword" onclick="togglePasswordVisibility()"> Show Password
        <a href="signup.php">Or Sign Up Here</a>
        <button  type="submit" id="Login">Log In</button>
    </form>
    </div>
    <div class="overlay-container">
    <div class="overlay">
    <div class="overlay-container">
    <div class="overlay">
    <div class="overlay-panel overlay-right">
    <h1>HTML CSS Login Form</h1>
    <p>This login form is created using pure HTML and CSS. For social icons, FontAwesome is used.</p>
    </div>
    </div>
    </div>
    </div>
</div>
<script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            var showPasswordCheckbox = document.getElementById("showPassword");

            if (showPasswordCheckbox.checked) {
                passwordField.type = "text"; 
            } else {
                passwordField.type = "password"; 
            }
        }
    </script>
</body>
</html>