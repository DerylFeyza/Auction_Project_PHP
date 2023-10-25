<?php
include "header.php";
include "koneksi.php";
session_start();
if (isset($_GET['id_item'])) {
    $_SESSION['item_id'] = $_GET['id_item'];

} else if (!isset($_GET['id_item'])) {
    'location: auction.php';
}
$item_id = $_SESSION['item_id'];
$qry_detail_item = mysqli_query($conn, "select * from item where id = '" . $item_id . "'");
$dt_item = mysqli_fetch_array($qry_detail_item);
?>
<div class="container">
    <div class="row justify-content-evenly">
        <div class="col-md-4">
            <div class="card shadow">
                <img src="/Project_PHP/itemasset/<?= $dt_item['cover'] ?>" method="post" class="card-img-top">
                <div class="card-body">
                    <h2 class="card-title">
                        <?= $dt_item['name'] ?>
                    </h2>
                    <h5 class="card-title">
                        <?= $dt_item['startprice'] ?>
                    </h5>
                    <p class="card-text">
                        <?= substr($dt_item['deskripsi'], 0, 20) ?>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div id="response"></div>
            <div class="container mt-5">
                <form id="myForm" enctype="multipart/form-data" method="post" action="proses_update_details.php">
                    <input type="hidden" name="id" value="<?= $dt_item['id'] ?>">
                    nama:
                    <input autocomplete="off" type="text" name="name" value="<?= $dt_item['name'] ?>"
                        class="form-control" required>
                    harga awal:
                    <input autocomplete="off" type="integer" name="startprice" value="<?= $dt_item['startprice'] ?>"
                        class="form-control" required>
                    Deskripsi:
                    <input autocomplete="off" type="text" name="deskripsi" value="<?= $dt_item['deskripsi'] ?>"
                        class="form-control" required>
                    Foto:
                    <input autocomplete="off" type="file" name="foto" class="form-control" required>
                    <input type="submit" value="Tambah Buku" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

</div>
</body>

</html>