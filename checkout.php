<?php 
    session_start();
    include "koneksi.php";
    $seksi=@$_SESSION['seksi'];
    if(count($seksi)>0){
        mysqli_query($conn,"insert into peminjaman_buku (id_siswa,tanggal_pinjam,tanggal_kembali) value('".$_SESSION['id_siswa']."','".date('Y-m-d')."','".$tgl_harus_kembali."')");
         $id=mysqli_insert_id($conn);
        foreach ($seksi as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into detail_peminjaman_buku (id_peminjaman_buku,id_buku,qty) value('".$id."','".$val_produk['id_buku']."','".$val_produk['qty']."')");
        }
        // unset($_SESSION['seksi']);
        // echo '<script>alert("Anda berhasil meminjam buku");location.href="histori_peminjaman.php"</script>';
    }
?> nda paham