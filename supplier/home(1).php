<?php
include "../koneksi.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Home</title>
    <style>
      .hidetext { -webkit-text-security: disc; }
    </style>
</head>
<body>
<div class="container">
<div class="col mt-2 justify-content-end">
<h3>Data Supplier</h3>
<div class="dropdown">
  <a href="create.php" class="btn btn-secondary">Buat Data</a>
  <a href="index.php" class="btn btn-secondary" onclick="return confirm('Apakah anda ingin keluar?')">Keluar</a>
</div> 
</div> 

<div class="col">
  <div class="row">
    <table class="table mt-2">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Id Supplier</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">No Telepon</th>
          <th scope="col">Alamat</th>
          <th scope="col" class="center">Delete | Edit | Lihat</th>
        </tr>
      </thead>
      <tbody>
          <?php 
          $query=mysqli_query ($koneksi,"SELECT * FROM supplier ORDER BY id_supplier");
          $no=1;
          while($r= mysqli_fetch_array($query)){
            echo"<tr>
            <th scope='row'>$no</th>
            <td>$r[id_supplier]</td>
            <td>$r[nama_supplier]</td>
            <td>$r[jk_supplier]</td>
            <td>$r[no_telp]</td>
            <td>$r[alamat]</td>
            <td>
            <a href='delete.php?id_supplier=$r[id_supplier]' button type='button' class='btn btn-danger' onclick='return confirm('Are You Sure?')'><i class='bi bi-trash'></i></a>
            <a href='edit.php?id_supplier=$r[id_supplier]'button type='button' class='btn btn-warning'><i class='bi bi-pencil-fill'></i></a>
            <a href='lihat.php?id_supplier=$r[id_supplier]'button type='button' class='btn btn-success'><i class='bi bi-eye-fill'></i></a>
            </td>
          </tr>";
          $no++;
          }
        ?>
      </tbody>
    </table>
    </div>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>