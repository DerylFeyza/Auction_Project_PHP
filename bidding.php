<?php 
    include "header.php";
    include "koneksi.php";
    if(isset($_GET['id'])){
        $_SESSION['item_id'] = $_GET['id'];
    }
    else if(!isset($_GET['id'])){
        'location: auction.php';
    }
    $item_id = $_SESSION['item_id'];
    $qry_detail_item = mysqli_query($conn, "select * from item where id = '$item_id'");
    $dt_item = mysqli_fetch_array($qry_detail_item);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/mystyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<div class="container bid-container">
    <div class="card-wrapper">
        <form action="bidding_process.php" method="post">
        <div class="row">
            <div class="image-container">
                <img src="/Project_PHP/itemasset/<?= $dt_item['cover'] ?>" method="post">
            </div>
            <div class="item-info">
                    <thead>
                        <tr>                           
                            <td><h1><?= $dt_item['name'] ?></h1></td>                     
                        </tr>
                        <tr>
                            <td><p></p><?= $dt_item['deskripsi'] ?></p></td>
                        </tr>
                        <tr class="input-bid"><td><input type="number" name="bid" value="" class="form-control"></td></tr>

                        <tr><td><input type="submit" name="simpan" value="Tambah Buku" class="btn btn-primary"></td></tr>    
                    </thead>
            </div>
        </div>
        </form>
        </div>

        <div class="table-container">
        <table class="table table-striped table-seg">
            <thead>
                <th>NO</th><th>username</th><th>Bid</th>
            </thead>
        <?php 
        include "koneksi.php";
                $qry_bids=mysqli_query($conn,"select * from bids WHERE id_item = '$item_id' order by bid desc");
                $no=0;
                while($dt_bids=mysqli_fetch_array($qry_bids)){
                    $no++;
                    $id_user = $dt_bids['id_user'];
                    $qry_user = mysqli_query($conn, "SELECT username FROM client WHERE id = '$id_user'");
                    $nama_user = mysqli_fetch_array($qry_user)
                    ?>
                    <tr>
                        <td><?=$no?></td>
                        <td><?=$nama_user['username']?></td>
                        <td><?=$dt_bids['bid']?></td>
                    </tr>
                
            <?php 
                }
                ?>
        </table>
        </div>
    </div>