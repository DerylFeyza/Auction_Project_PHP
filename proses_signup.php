<?php
if($_POST){
    $username=$_POST['username'];
    $password= $_POST['password'];

    if(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='signup.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='signup.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (nama_siswa,tanggal_lahir, gender, alamat, username, password, id_kelas) 
        value ('".$username."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan akun');location.href='signup.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan akun');location.href='signup.php';</script>";
        }
    }
}
?>