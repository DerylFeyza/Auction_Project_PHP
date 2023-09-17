<?php 
session_start()
?>
  
<!DOCTYPE html>
<html lang="en">
<head> 
  <style>@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');</style>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3 scrolled-navbar">
      <div class="container">
        <a class="navbar-brand" href="#">Negawatt</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="auction.php">Auction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">logoutidk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Contact</a>
            </li>
            <li class="nav-item">
              <a  class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
              Button
            </a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
     
    </div>
    <ul>
    <li><a class="dropdown-item" id="offcanvasitem" href="tambah_item.php">bkp</a></li>
    <li><a class="dropdown-item" id="offcanvasitem" href="item_manager.php">Manage Auction</a></li>
    <li><a class="dropdown-item" id="offcanvasitem" href="#">Something else here</a></li>
    </ul>
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 0) {
            nav.style.backgroundColor = 'rgb(194, 31, 131)';
            nav.classList.add('shadow'); 
        } else {
            nav.style.backgroundColor = ''; 
            nav.classList.remove('bg-dark','shadow'); 
        }
        });
    </script>
  </body>
  
</html>