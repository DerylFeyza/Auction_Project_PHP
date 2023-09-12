<?php include "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/mystyle.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    .card{
        background-color: rgb(32, 28, 28);
        color: white;
    }
    .btn{
        background-color: rgb(91, 46, 255);
        border: 1px solid black;
    }
    img{
        width: 100px;
        height: 250px;
        object-fit: cover;
    }
    .smh{
        margin-bottom: 20px;
    }
</style>

<div class="row">
    <?php 
    include "koneksi.php";
    $qry_item=mysqli_query($conn,"select * from item");
    while($dt_item=mysqli_fetch_array($qry_item)){
        ?>
        <div class="smh col-md-3">
            <div class="card" >
              <img src="/Project_PHP/itemasset/<?=$dt_item['cover']?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title"><?=$dt_item['name']?></h5>
                <h4 class="card-title"><?=$dt_item['startprice']?></h4>
                <p class="card-text"><?=substr($dt_item['deskripsi'], 0,20)?></p>
              </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>