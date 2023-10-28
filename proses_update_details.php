<?php
if($_POST){
    $id=$_POST['id'];
    $name = $_POST['name'];
    $deskripsi = $_POST['deskripsi'];
    $startprice = $_POST['startprice'];
    include "koneksi.php";
    $imgType = $_FILES['foto']['type'];
    $file_content = file_get_contents($_FILES['foto']["tmp_name"]);    
    $stmt = $conn->prepare("UPDATE item SET name=?, startprice=?, cover=?, covertype=?, deskripsi=?, status=? WHERE id=?");
    $stmt->bind_param("ssssssi", $name, $startprice, $file_content, $imgType, $deskripsi, $status, $id);
    if ($stmt->execute()) {
        echo "<script>alert('sukses update');location.href='home.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>