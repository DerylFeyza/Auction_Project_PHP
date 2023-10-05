<!-- <?php
//FILE IS NOT USED
session_start();
if (isset($_SESSION['id'])) {
    $id_publisher = $_SESSION['id'];
}
else{
    echo "<script>alert('You are not logged in');location:login.php;</script>";
}

$target_dir = "itemasset/";
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["foto"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check file size
if ($_FILES["foto"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

if($_POST){
    $name=$_POST['name'];
    $startprice=$_POST['startprice'];
    $deskripsi=$_POST['deskripsi'];
    $status='pending';

    include "koneksi.php";
    $insert=mysqli_query($conn,"insert into item (id_publisher, name, startprice, cover, deskripsi, status) value ('".$id_publisher."','".$name."','".$startprice."','".$_FILES["foto"]["name"]."','".$deskripsi."','".$status."')") or die(mysqli_error($conn));
    if($insert){
        echo "<script>alert('Sukses menambahkan item');location.href='tambah_item.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan item');location.href='tambah_item.php';</script>";
    }
    }

?> -->
