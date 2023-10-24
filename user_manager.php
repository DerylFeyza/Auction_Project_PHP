<?php 
 include "header.php";
 include "koneksi.php";
 ?>
 <head>
    <link rel="stylesheet" href="css/manage.css">
 </head>
 <table class="table table-striped usermanager">
 <thead><tr><th>ID</th><th>Username</th><th>Role</th><th>Action</th></tr></thead>
 <tbody>
 <?php
    
    $qry_user=mysqli_query($conn,"select * from client");
    $no=0;
    while($dt_users=mysqli_fetch_array($qry_user)){
        $no++;
        ?>
        <tr class="rows" style="padding-top: 10px; background-color: blue;">
            <td><?=$dt_users['id']?></td>
            <td><?=$dt_users['username']?></td>
            <td><?=$dt_users['role']?></td>
            <td>
            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown button
            </button>
            <ul class="dropdown-menu">
                <?php
                    if ( $dt_users['role'] == 'admin') {
                        echo '<li><a class="dropdown-item" href="#">Delete</a></li>';

          
                    }
                ?>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </div>
            </td>
        </tr>
<?php 
    }
    ?>
</tbody>
</table>
