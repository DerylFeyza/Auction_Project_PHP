<?php
include "header.php";
?>
<div class="container" style="padding-top: 5rem;">
    <div class="section">
        <form method="post" class="row justify-content-evenly">
            <button type="submit" name="auctioned_button" class="col-2 btn btn-primary shadow">Show Auctioned Items</button>
            <button type="submit" name="pending_button" class="col-2  btn btn-primary shadow">Show Pending Items</button>
            <button type="submit" name="approved_button" class="col-2  btn btn-primary shadow">Show Approved Items</button>
            <button type="submit" name="sold_button" class="col-2  btn btn-primary shadow">Show sold Items</button>
            <button type="submit" name="cancelled_button" class="col-2  btn btn-primary shadow">Show cancelled Items</button>
            <?php include "item_manager_logic.php"; ?>
        </form>
    </div>
</div>
<?php include "footer.php" ?>