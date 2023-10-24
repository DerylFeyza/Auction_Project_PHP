<?php
include "header.php";
include "koneksi.php";
?>
<div class="row">
  <?php
  $qry_item = mysqli_query($conn, "select * from item where id_publisher = '" . $_SESSION['id'] . "'");
  while ($dt_item = mysqli_fetch_array($qry_item)) {
    ?>
    <div class="smh col-md-3">
      <div class="card">
        <img src="/Project_PHP/itemasset/<?= $dt_item['cover'] ?>" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">
            <?= $dt_item['name'] ?>
          </h5>
          <h4 class="card-title">
            <?= $dt_item['startprice'] ?>
          </h4>
          <p class="card-text">
            <?= substr($dt_item['deskripsi'], 0, 20) ?>
          </p>
          <a href="details_publisher_item.php?id_item=<?= $dt_item['id'] ?>" class="btn">See Details</a>
        </div>
      </div>
    </div>
    <?php
  }
  ?>
</div>