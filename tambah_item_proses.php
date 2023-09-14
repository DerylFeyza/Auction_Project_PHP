<?php
session_start();
if (isset($_SESSION['id'])) {
    $id_publisher = $_SESSION['id'];
}

if($_POST){
    $name=$_POST['name'];
    $startprice=$_POST['startprice'];
    $deskripsi=$_POST['deskripsi'];
    $foto=$_POST['foto'];
    $status=$_POST['pending'];
    
    if(empty($name)){
        echo "<script>alert('nama item tidak boleh kosong');location.href='tambah_item.php';</script>";

    } elseif(empty($startprice)){
        echo "<script>alert('pengarang boleh kosong');location.href='tambah_item.php';</script>";
    } elseif(empty($foto)){
        echo "<script>alert('foto tidak boleh kosong');location.href='tambah_item.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into item (id_publisher, name, startprice, cover, deskripsi, status) value ('".$id_publisher."','".$name."','".$startprice."','".$cover."','".$deskripsi."','".$status."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan item');location.href='tambah_item.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan item');location.href='tambah_item.php';</script>";
        }
    }
}
?>
