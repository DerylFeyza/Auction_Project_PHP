<?php
include "header.php";
?>
<div class="container">
    <form method="post" action="">
        <button type="submit" name="auctioned_button">Show Auctioned Items</button>
        <button type="submit" name="pending_button">Show Pending Items</button>
        <button type="submit" name="approved_button">Show Approved Items</button>
        <button type="submit" name="sold_button">Show sold Items</button>
        <button type="submit" name="cancelled_button">Show cancelled Items</button>
        <?php include "item_manager_logic.php"; ?>
    </form>
</div>
</body>

</html>