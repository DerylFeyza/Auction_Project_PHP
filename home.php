<?php include "header.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/mystyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="bg">
        <div class="landingtext">
            <?php
            if (isset($_SESSION['status_login'])) {
                // This HTML block will be generated if the condition is true
                echo '<h2>Welcome <span style="text-transform:uppercase; color: brown">' . $_SESSION['username'] . '</span> Go Buy Some Slave.</h2>';
            } else if (!isset($_SESSION['status_login'])) {
                echo '<h1>Welcome to the auction, please log in first</h1>';
                echo '<a href=login.php class="btn btn-primary w-25 mt-3">Login</a>';

            }
            ?>
        </div>

    </div>
    <div class="details">
        <div class="textbox">
            <h1>Ongoin Auction</h1>
        </div>
    </div>
</body>

</html>