<?php 
 include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Add Item</title>
    <link rel="stylesheet" href="css/mystyle.css">
</head>
<body>
<div class="container" id="tambah-item-form">
    <form id="myForm" enctype="multipart/form-data" >
        nama:
        <input autocomplete="off" type="text" name="name" value="" class="form-control" required>
        harga awal:
        <input autocomplete="off" type="integer" name="startprice" value="" class="form-control" required>
        Deskripsi:
        <input autocomplete="off" type="text" name="deskripsi" value="" class="form-control" required>
        Foto:
        <input autocomplete="off" type="file" name="foto" class="form-control" required>
        <input type="button" value="Tambah Item" class="btn btn-primary" onclick="submitForm()">
    </form>

    <div id="response"></div>
</div>
<script>
    function submitForm() {
        var form = document.getElementById("myForm");
        var name = form.elements.name.value;
        var startprice = form.elements.startprice.value;
        var deskripsi = form.elements.deskripsi.value;
        var responseContainer = document.getElementById("response");
    if (!name || !startprice || !deskripsi) {
        responseContainer.innerHTML = '<div class="alert alert-danger">' + "all fields are required!" + '</div>';
        return;
    }
        var formData = new FormData(form);
        var xhr = new XMLHttpRequest();    
        xhr.open("POST", "tambah_item_proses2.php", true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText); 
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    responseContainer.innerHTML = '<div class="alert alert-success">' + response.message + '</div>';
                    form.reset(); 
                } else {
                    responseContainer.innerHTML = '<div class="alert alert-danger">' + response.message + '</div>';
                }
                responseContainer.style.display = "block";
            }
        };
        
        xhr.send(formData);
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
