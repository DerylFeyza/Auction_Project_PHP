<?php 
    include "koneksi.php";
    if ($_GET) {
    $id = $_GET['id'];
    $history_query = mysqli_query($conn, "SELECT * FROM bids WHERE bid = (SELECT MAX(bid) FROM bids WHERE id_item = ".$id.") AND id_item = ".$id); 
    $dt_history = mysqli_fetch_array($history_query);
    $id_winner = $dt_history["id_user"];
    $id_item = $dt_history["id_item"];
    $final_bid = $dt_history["bid"];

    $winner_query =   mysqli_query($conn, "SELECT * FROM client WHERE id =". $id_winner); 
    $dt_history_winner = mysqli_fetch_array($winner_query);
    $winner = $dt_history_winner["username"];

    $insert = mysqli_query($conn, "insert into history (id_item, id_winner, winner, final_bid) 
    value ('" . $id_item . "','" . $id_winner . "', '" . $winner . "', '".$final_bid."')") or die(mysqli_error($conn));

    if ($insert) {
        echo "<script>alert('Sukses tambah history');location.href='item_manager.php';</script>";
    }
    else{
        echo "<script>alert('Sukses tambah history');location.href='item_manager.php';</script>";

    }
}
?>