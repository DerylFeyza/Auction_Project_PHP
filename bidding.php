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

<h2>Pinjam item</h2>

<form action="bidding_process.php" method="post">
<div class="row">
    <div class="col-md-4">
        <img src="/Project_PHP/itemasset/<?= $dt_item['cover'] ?>" method="post">
    </div>
    <div class="col-md-8">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <td>Nama item</td><td><?= $dt_item['name'] ?></td>
                </tr>
                <tr>
                    <td>Deskripsi</td><td><?= $dt_item['deskripsi'] ?></td>
                </tr>
                <tr>
                    <td>bid</td><td><input type="number" name="bid" value="" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="simpan" value="Tambah Buku" class="btn btn-primary"></td>
                </tr>
            </thead>
        </table>
    </div>
</div>
</form>
<div class="container">
<table class="table table-dark table-striped">
    <thead>
        <th>NO</th><th>User</th><th>username</th><th>Bid</th>
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
                <td><?=$dt_bids['id_user']?></td>
                <td><?=$nama_user['username']?></td>
                <td><?=$dt_bids['bid']?></td>
            </tr>
        
    <?php 
        }
        ?>
</div>