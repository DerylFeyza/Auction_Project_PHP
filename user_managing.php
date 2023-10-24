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

<?php 
    if (isset($_GET['id_user_toadmin'])) {
        include "koneksi.php";
        $id_user = $_GET['id_user_toadmin'];
        
        $qry_update = mysqli_query($conn, "UPDATE client SET role = 'admin' WHERE id = '$id_user'");
        
        if ($qry_update) {
            echo "<script>alert('Success update user role');location.href='user_manager.php';</script>";
        } else {
            echo "<script>alert('Failed to update user role');location.href='user_manager.php';</script>";
        }
    }
?>
