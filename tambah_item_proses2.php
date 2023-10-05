<?php
session_start();
$response = array();

if (isset($_SESSION['id'])) {
    $id_publisher = $_SESSION['id'];
} else {
    $response['success'] = false;
    $response['message'] = 'You are not logged in';
} 

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
        $response['success'] = false;
        $response['message'] = 'File is not a valid image';
    }
}

// Check file size
if ($_FILES["foto"]["size"] > 500000) {
    $response['success'] = false;
    $response['message'] = 'File is too large';
}

// Allow only specific file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
    $response['success'] = false;
    $response['message'] = 'Only JPG, JPEG, PNG & GIF files are allowed';
}

if (empty($response)) {
    if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
        $name=$_POST['name'];
        $startprice=$_POST['startprice'];
        $deskripsi=$_POST['deskripsi'];
        $status='pending';
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into item (id_publisher, name, startprice, cover, deskripsi, status) value ('".$id_publisher."','".$name."','".$startprice."','".$_FILES["foto"]["name"]."','".$deskripsi."','".$status."')") or die(mysqli_error($conn));
        $response['success'] = true;
        $response['message'] = 'Sukses menambahkan item';
    } else {
        $response['success'] = false;
        $response['message'] = 'Error uploading the file';
    }
}

header('Content-Type: application/json');
echo json_encode($response);

