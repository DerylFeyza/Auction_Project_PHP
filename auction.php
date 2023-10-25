<?php include "header.php" ?>
<style>
    .card {
        background-color: rgb(32, 28, 28);
        color: white;
    }

    .btn {
        background-color: rgb(91, 46, 255);
        border: 1px solid black;
    }

    img {

        width: 100px;
        height: 250px;
        object-fit: cover;
        background-position: top center;
    }

    .smh {
        margin-bottom: 20px;
    }
</style>

<div class="container" style="margin-top: 5rem" id="auction-container">
    <h1 class="auction">
        Ongoing Auction
    </h1>
    <hr>
    <div class="row">
        <?php
        include "koneksi.php";
        $qry_item = mysqli_query($conn, "SELECT * FROM item WHERE STATUS = 'Auctioned'");
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
                        <a href="bidding.php?id=<?= $dt_item['id'] ?>" class="btn">Bid her</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <h1>Coming Soon</h1>
        <hr>
        <?php
        include "koneksi.php";
        $qry_item = mysqli_query($conn, "SELECT * FROM item WHERE STATUS = 'Approved'");
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
                        <a href="bidding.php?id=<?= $dt_item['id'] ?>" class="btn">See Details</a>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
</body>

</html>