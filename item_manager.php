<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/manage.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .item-manager-container{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container item-manager-container">
        <form method="post" action="">
            <button class="btn btn-primary " type="submit" name="auctioned_button">Show Auctioned Items</button>
            <button class="btn btn-primary " type="submit" name="pending_button">Show Pending Items</button>
            <button class="btn btn-primary " type="submit" name="approved_button">Show Approved Items</button>
            <button class="btn btn-primary " type="submit" name="sold_button">Show sold Items</button>
            <button class="btn btn-primary " type="submit" name="cancelled_button">Show cancelled Items</button>
            <?php include "item_manager_logic.php"; ?>
        </form>
    </div>
</body>

</html>