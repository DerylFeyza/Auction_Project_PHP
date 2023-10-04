<?php
include "koneksi.php";
if(isset($_POST['auctioned_button'])){
    $statusFilter = 'Auctioned';
    displayItems($statusFilter);
} 
elseif(isset($_POST['pending_button'])){
    $statusFilter = 'Pending';
    displayItems($statusFilter);
}
elseif(isset($_POST['approved_button'])){
    $statusFilter = 'approved';
    displayItems($statusFilter);
}
elseif(isset($_POST['cancelled_button'])){
    $statusFilter = 'Cancelled';
    displayItems($statusFilter);
}
elseif(isset($_POST['sold_button'])){
    $statusFilter = 'Sold';
    displayItems($statusFilter);
}

function displayItems($statusFilter) {
    include "koneksi.php";
    $statusFilter = mysqli_real_escape_string($conn, $statusFilter); 
    $qry_item = mysqli_query($conn, "SELECT * FROM item WHERE status LIKE '$statusFilter'");
    while ($dt_item = mysqli_fetch_array($qry_item)) {
        ?>
        <div class="card mb-3" style="max-width: 500px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/Project_PHP/itemasset/<?= $dt_item['cover'] ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $dt_item['name'] ?></h5>
                        <h4 class="card-title"><?= $dt_item['startprice'] ?></h4>
                        <p class="card-text"><?= substr($dt_item['deskripsi'], 0, 20) ?></p>
                        <a href="item_hapus.php?id=<?=$dt_item['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>