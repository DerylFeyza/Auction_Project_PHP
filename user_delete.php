<?php 
    if($_GET['id_user']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from client where id='".$_GET['id_user']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus user');location.href='user_manager.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus user');location.href='user_manager.php';</script>";
        }
    }
?>
