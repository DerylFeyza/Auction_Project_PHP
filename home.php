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
    if(isset($_SESSION['status_login'])){
        if ( $_SESSION['status_login'] == true) {
            // This HTML block will be generated if the condition is true
            echo '<h2>welcome ' . $_SESSION['username'] . ' GO BUY SOME SLAVE.</h2>';
        } 
    }

    else if(!isset($_SESSION['status_login'])){
        // This HTML block will be generated if the condition is false
        echo '<h1> yo mama </h1>';
        echo '<h1> go login nigga</h1>';
        echo '<a href=login.php login>';
        
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