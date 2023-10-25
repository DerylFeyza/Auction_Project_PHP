<?php
include "header.php";
include "koneksi.php";
if (isset($_GET['id'])) {
    $_SESSION['item_id'] = $_GET['id'];

} else if (!isset($_GET['id'])) {
    'location: auction.php';
}
$qry_detail_item = mysqli_query($conn, "select * from item where id = '" . $_GET['id_item'] . "'");
$dt_item = mysqli_fetch_array($qry_detail_item);

$qry_get_item = mysqli_query($conn, "select * from item where 
    id = '" . $_GET['id_item'] . "'");
$dt_item = mysqli_fetch_array($qry_get_item);
?>
<div class="container bid-container">
    <div class="card-wrapper center">
        <form action="bidding_process.php" method="post">
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
        </form>
    </div>
</div>

<div class="container" id="tambah-item-form">
    <form id="myForm" enctype="multipart/form-data">
        nama:
        <input autocomplete="off" type="text" name="name" value="<?= $dt_item['name'] ?>" class="form-control" required>
        harga awal:
        <input autocomplete="off" type="integer" name="startprice" value="<?= $dt_item['startprice'] ?>" class="form-control" required>
        Deskripsi:
        <input autocomplete="off" type="text" name="deskripsi" value="<?= $dt_item['deskripsi'] ?>" class="form-control" required>
        <!-- Foto:
        <input autocomplete="off" type="file" name="foto" class="form-control" required> -->
        <input type="button" value="Update Auction" class="btn btn-primary" onclick="submitForm()">
    </form>

    <div id="response"></div>
</div>
<script>
    function submitForm() {
        var form = document.getElementById("myForm");
        var name = form.elements.name.value;
        var startprice = form.elements.startprice.value;
        var deskripsi = form.elements.deskripsi.value;
        var responseContainer = document.getElementById("response");
        if (!name || !startprice || !deskripsi) {
            responseContainer.innerHTML = '<div class="alert alert-danger">' + "all fields are required!" + '</div>';
            return;
        }
        var formData = new FormData(form);
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "proses_update_details.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText);
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    responseContainer.innerHTML = '<div class="alert alert-success">' + response.message + '</div>';
                    form.reset();
                } else {
                    responseContainer.innerHTML = '<div class="alert alert-danger">' + response.message + '</div>';
                }
                responseContainer.style.display = "block";
            }
        };

        xhr.send(formData);
    }
</script>
</body>

</html>