<?php
session_start();
if (isset($_SESSION['id'])) {
    $id_user = $_SESSION['id'];
    if($_POST){
        $name=$_POST['name'];
        $deskripsi=$_POST['deskripsi'];
        $startprice=$_POST['startprice'];
        $foto=$_POST['foto'];
        if(empty($name)){
            echo "<script>alert('nama auction tidak boleh kosong');location.href='proses_update_details.php';</script>";
    
        // } elseif(empty($name)){
        //     echo "<script>alert('name tidak boleh kosong');location.href='tambah_siswa.php';</script>";
        } else {
            include "koneksi.php";
            if(empty($password)){
                $update=mysqli_query($conn,"update item set name='".$name."',deksripsi='".$deksripsi."', startrprice='".$startrprice."'") or die(mysqli_error($conn));
                if($update){
                    echo "<script>alert('Sukses update');location.href='details_publisher_item.php';</script>";
                } else {
                    echo "<script>alert('Gagal update');location.href='proses_update_details.php?id_item=".$id_item."';</script>";
                }
            } else {
                $update=mysqli_query($conn,"update auction set name='".$name."',deksripsi='".$deksripsi."', startrprice='".$startrprice."'") or die(mysqli_error($conn));
                if($update){
                    echo "<script>alert('Sukses update');location.href='details_publisher_item.php';</script>";
                } else {
                    echo "<script>alert('Gagal update');location.href='proses_update_details.php?id_item=".$id_item."';</script>";
                }
            }  
        } 
    
            include "koneksi.php";
            $insert=mysqli_query($conn,"insert into bids (id_user, id_item, bid) value ('".$id_user."','".$id_item."','".$bid."')") or die(mysqli_error($conn));
            if($insert){
                echo "<script>alert('Sukses menambahkan item');location.href='details_publisher_item.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan item');location.href='details_publisher_item.php';</script>";
            }
        }
    // }
}
else{
    echo "<script>alert('You are not logged in');location.href='details_publisher_item.php';</script>";
}
?>
