<?php
if($_POST){
    $id=$_POST['id'];
    $name = $_POST['name'];
    $deskripsi = $_POST['deskripsi'];
    $startprice = $_POST['startprice'];
    include "koneksi.php";
    $update = mysqli_query($conn, "update item set name='" . $name . "',deskripsi='" . $deskripsi . "', startprice='" . $startprice . "' where id = '".$id."' ") or die(mysqli_error($conn));
    if ($update) {
        echo "<script>alert('Sukses update');location.href='details_publisher_item.php';</script>";
    } else {
        echo "<script>alert('Gagal update');location.href='proses_update_details.php?id_item=" . $id_item . "';</script>";
    }
}
?>
