<?php include
    "header.php"
    ?>
<div class="sign-up-container">
    <div class="form-container signup-container">
        <form class="login" action="proses_signup.php" method="post">
            <h1>Sign up</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fa fa-facebook fa-2x"></i></a>
                <a href="#" class="social"><i class="fab fa fa-twitter fa-2x"></i></a>
            </div>
            <input autocomplete="off" type="text" name="username" value="" class="form-control" />
            <input type="password" name="password" class="form-control" />
            <a href="login.php">Back to login page</a>
            <button type="submit" id="Login">Sign Up</button>
        </form>
    </div>
    <?php include "footer.php" ?>