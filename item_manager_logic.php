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
    $statusFilter = 'Approved';
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

function displayItems($statusFilter) { ?>
    <div class="row">
    <?php
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
                        <?php
                        if ($statusFilter == 'Pending') {
                            echo '<a href="item_update_status.php?id=' . $dt_item['id'] . '&action=Reject" onclick="return confirm(\'Apakah anda yakin untuk reject item ini?\')" class="btn btn-primary">Reject</a>';
                            echo '<a href="item_update_status.php?id=' . $dt_item['id'] . '&action=Approved" onclick="return confirm(\'Apakah anda yakin untuk Aprrove item ini?\')" class="btn btn-primary">Approve</a>';
                        }
                        if ($statusFilter == 'Approved') {
                            echo '<a href="item_update_status.php?id=' . $dt_item['id'] . '&action=auction" onclick="return confirm(\'Apakah anda yakin untuk start auction\')" class="btn btn-primary">Start Auction</a>';
                            echo '<a href="item_update_status.php?id=' . $dt_item['id'] . '&action=Cancel" onclick="return confirm(\'Apakah anda yakin untuk cancel auction ini?\')" class="btn btn-primary">Cancel</a>';
                        }
                        if ($statusFilter == 'Auctioned') {
                            echo '<a href="item_update_status.php?id=' . $dt_item['id'] . '&action=Reject" onclick="return confirm(\'Apakah anda yakin untuk reject item ini?\')" class="btn btn-primary">See Details</a>';
                        }
                        // if ($statusFilter == 'Pending') {
                        //     echo '<a href="item_update_status.php?id=' . $dt_item['id'] . '&action=Reject" onclick="return confirm(\'Apakah anda yakin untuk reject item ini?\')" class="btn btn-primary">Reject</a>';
                        //     echo '<a href="item_update_status.php?id=' . $dt_item['id'] . '&action=Approved" onclick="return confirm(\'Apakah anda yakin untuk Aprrove item ini?\')" class="btn btn-primary">Approve</a>';
                        // }
                        // if ($statusFilter == 'Pending') {
                        //     echo '<a href="item_update_status.php?id=' . $dt_item['id'] . '&action=Reject" onclick="return confirm(\'Apakah anda yakin untuk reject item ini?\')" class="btn btn-primary">Reject</a>';
                        //     echo '<a href="item_update_status.php?id=' . $dt_item['id'] . '&action=Approved" onclick="return confirm(\'Apakah anda yakin untuk Aprrove item ini?\')" class="btn btn-primary">Approve</a>';
                        // }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>
</div>