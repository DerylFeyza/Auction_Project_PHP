<?php
// remove all session variables
session_start();
        session_destroy();      
    echo "<script>alert('Logoout Berhasil'); location.href='login.php' </script>";
    
?>
