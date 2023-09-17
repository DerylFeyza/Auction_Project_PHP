<!-- ngapus auction buat admin -->

<?php 
    if($_GET['id']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from  where item='".$_GET['id']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus auction');location.href='auction.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus auction');location.href='auction.php';</script>";
        }
    }
?>
