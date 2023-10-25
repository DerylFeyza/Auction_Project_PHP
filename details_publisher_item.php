<?php
include "header.php";
include "koneksi.php";
session_start();
$item_id = $_SESSION['item_id'];
if (isset($_GET['id'])) {
    $_SESSION['item_id'] = $_GET['id'];

} else if (!isset($_GET['id'])) {
    'location: auction.php';
}
$qry_detail_item = mysqli_query($conn, "select * from item where id = '" . $_GET['id_item'] . "'");
$dt_item = mysqli_fetch_array($qry_detail_item);
?>
<div class="container bid-container">
    <div class="card-wrapper center">
            <div class="row">
                <div class="image-container">
                    <img src="/Project_PHP/itemasset/<?= $dt_item['cover'] ?>" method="post">
                </div>
                <div class="item-info">
                    <thead>
                        <tr>
                            <td>
                                <h1>
                                    <?= $dt_item['name'] ?>
                                </h1>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p></p>
                                <?= $dt_item['deskripsi'] ?>
                                </p>
                            </td>
                            <td>
                                <p></p>Start Price:
                                <?= $dt_item['startprice'] ?>
                                </p>
                            </td>
                        </tr>
                    </thead>
                </div>
            </div>
    </div>
</div>

<div class="container" id="tambah-item-form" >
    <form id="myForm" enctype="multipart/form-data" method="post" action="proses_update_details.php">
    <input type="hidden" name="id" value="<?= $dt_item['id'] ?>">
        nama:
        <input autocomplete="off" type="text" name="name" value="<?= $dt_item['name'] ?>" class="form-control" required>
        harga awal:
        <input autocomplete="off" type="integer" name="startprice" value="<?= $dt_item['startprice'] ?>"
            class="form-control" required>
        Deskripsi:
        <input autocomplete="off" type="text" name="deskripsi" value="<?= $dt_item['deskripsi'] ?>" class="form-control"
            required>
        Foto:
        <input autocomplete="off" type="file" name="foto" class="form-control" required>
        <input type="submit" value="Tambah Buku" class="btn btn-primary">
    </form>

    <div id="response"></div>
</div>
</body>

</html>