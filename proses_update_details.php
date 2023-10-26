<?php
if($_POST){
    $id=$_POST['id'];
    $name = $_POST['name'];
    $deskripsi = $_POST['deskripsi'];
    $startprice = $_POST['startprice'];
    include "koneksi.php";

    $update = mysqli_query($conn, "update item set name='" . $name . "',deskripsi='" . $deskripsi . "', startprice='" . $startprice . "' where id = '".$id."' ") or die(mysqli_error($conn));
    if ($update) {
            $result = mysqli_query($conn, "select cover from item where id='".$id."'");
            $row = mysqli_fetch_assoc($result);
            $filename = $row['cover'];
            unlink('itemasset/' . $filename);
    } else {
        echo "<script>alert('Gagal update');location.href='proses_update_details.php?id_item=" . $id_item . "';</script>";
    }
    echo "<script>alert('Gagal update');location.href='home.php';</script>";
}
?>
