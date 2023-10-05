<!-- ngapus auction buat admin -->

<?php 
    if($_GET['id']){
        include "koneksi.php";
        $result = mysqli_query($conn, "select cover from item where id='".$_GET['id']."'");
        $row = mysqli_fetch_assoc($result);
        $filename = $row['cover'];
        unlink('itemasset/' . $filename);
        $qry_hapus=mysqli_query($conn,"delete from item where id='".$_GET['id']."'");
        $qry_hapusbid=mysqli_query($conn,"delete from bids where id_item='".$_GET['id']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus auction');location.href='item_manager.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus auction');location.href='item_manager.php';</script>";
        }
    }
?>