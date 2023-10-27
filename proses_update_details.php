<?php
if($_POST){
    $id=$_POST['id'];
    $name = $_POST['name'];
    $deskripsi = $_POST['deskripsi'];
    $startprice = $_POST['startprice'];
    include "koneksi.php";

    $target_dir = "itemasset/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a valid image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "<script>alert('Gagal update');location.href='proses_update_details.php?id_item=" . $id_item . "';</script>";
        }
    }

    // Check file size
    if ($_FILES["foto"]["size"] > 500000) {
        echo "<script>alert('Gagal update file kebesaran');location.href='proses_update_details.php?id_item=" . $id_item . "';</script>";
    }

    // Allow only specific file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "<script>alert('Gagal update');location.href='proses_update_details.php?id_item=" . $id_item . "';</script>";
    }
    
    $update = mysqli_query($conn, "update item set name='" . $name . "', cover='" . $_FILES["foto"]["name"] . ", cover='" . $deskripsi . "', startprice='" . $startprice . "' where id = '".$id."' ") or die(mysqli_error($conn));
    if ($update) {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            $result = mysqli_query($conn, "select cover from item where id='".$id."'");
            $row = mysqli_fetch_assoc($result);
            $filename = $row['cover'];
            unlink('itemasset/' . $filename);
        }
    } else {
        echo "<script>alert('Gagal update');location.href='proses_update_details.php?id_item=" . $id_item . "';</script>";
    }
}
?>
