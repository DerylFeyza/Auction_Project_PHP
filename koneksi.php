<?php
$conn=mysqli_connect('localhost','root','','Project_PHP');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
echo "Connected Succesfully";
?>