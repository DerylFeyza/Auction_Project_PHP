<?php
include "header.php";
?>
<div class="container" style="padding-top: 5rem;">
    <form method="post" class="d-flex justify-content-evenly">
        <button type="submit" name="auctioned_button" class="btn btn-primary shadow">Show Auctioned Items</button>
        <button type="submit" name="pending_button"  class="btn btn-primary shadow">Show Pending Items</button>
        <button type="submit" name="approved_button"  class="btn btn-primary shadow">Show Approved Items</button>
        <button type="submit" name="sold_button"  class="btn btn-primary shadow">Show sold Items</button>
        <button type="submit" name="cancelled_button"  class="btn btn-primary shadow">Show cancelled Items</button>
        <?php include "item_manager_logic.php"; ?>
    </form>
</div>
<?php include "footer.php" ?>

