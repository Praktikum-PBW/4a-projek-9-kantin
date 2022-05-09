<?php 
include "session.php";

?>  

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">


    <!-- Font-->
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Josefin+Sans&family=Monoton&family=Satisfy&family=Square+Peg&family=Titillium+Web:wght@200&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/styles/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Kala Senja Canteen</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" href="admin/index.php">
              <h5><i class="bi bi-person-circle"></i> <?php echo $rowSession['nama_admin'] ?></h5>
            </a>
          </li>
        </ul>
        <hr style="color: black;">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="bi bi-grid-1x2"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/index.php">
              <i class="bi bi-person-lines-fill"></i> Admin
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pegawai/index.php">  
            <i class="bi bi-person-lines-fill"></i> Pegawai
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="supplier/index.php">
            <i class="bi bi-person-lines-fill"></i> Supplier
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="barang/index.php">
            <i class="bi bi-box2-fill"></i> Barang
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="penjualan/index.php">
            <i class="bi bi-box2-fill"></i> Penjualan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pembelian/index.php">
            <i class="bi bi-box2-fill"></i> Pembelian
            </a>
          </li>
          <hr>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">       
            <i class="bi bi-box-arrow-left"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <h3>Selamat Datang, <?php echo $rowSession['nama_admin'] ?> di Kala Senja Canteen!</h3>
      <div class="row text-white">
          <div class="card bg-info ml-7 mr-3" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa-solid fa-user mr-2"></i>
              </div>
              <h5 class="card-title">DATA ADMIN</h5>
              <div class="display-4">1</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card bg-success ml-7 mr-3" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa-solid fa-users mr-2"></i>
              </div>
              <h5 class="card-title">DATA PEGAWAI</h5>
              <div class="display-4">3</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card bg-danger ml-5" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa-solid fa-toolbox mr-2"></i>
              </div>
              <h5 class="card-title">DATA BARANG</h5>
              <div class="display-4">10</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card bg-warning ml-3" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa-solid fa-cart-shopping mr-2"></i>
              </div>
              <h5 class="card-title">PEMBELIAN</h5>
              <div class="display-4">8</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card bg-secondary ml-3" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa-solid fa-cart-arrow-down mr-2"></i>
              </div>
              <h5 class="card-title">PENJUALAN</h5>
              <div class="display-4">5</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>

          <div class="card bg-dark ml-3" style="width: 18rem;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa-solid fa-boxes-packing mr-2"></i>
              </div>
              <h5 class="card-title">SUPPLIER</h5>
              <div class="display-4">3</div>
              <a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
            </div>
          </div>
    </main>

    
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>