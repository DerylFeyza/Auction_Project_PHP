<?php
include"header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="css/manage.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="">
        <button type="submit" name="auctioned_button">Show Auctioned Items</button>
        <button type="submit" name="pending_button">Show Pending Items</button>
        <button type="submit" name="approved_button">Show Approved Items</button>
        <?php include "item_manager_logic.php"; ?>
    </form>
</body>
</html>

