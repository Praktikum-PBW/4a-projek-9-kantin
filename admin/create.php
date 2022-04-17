<?php 
include "../koneksi.php";
if(isset($_POST['create'])){
    $nama_admin =$_POST['nama_admin'];
    $email = $_POST['email'];
    $username=$_POST['username'];
    $password = $_POST['password'];
    $get_user = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE username='$username'");
    if(mysqli_num_rows($get_user)>0){
        echo "<script>alert('Username sudah digunakan!');
		window.location.replace('create.php')</script>";
    }else{
        $sql = mysqli_query($koneksi,"INSERT INTO tb_admin VALUES('','$nama_admin','$email','$username','$password')");
        if ($sql) {
            echo "<script>alert('Data Berhasil dimasukan!');
            window.location.replace('home.php')</script>";
        } else {
            echo "<script>alert('Data Gagal dimasukan!');
            window.location.replace('home.php')</script>";
        }
    }
}
?>


<?php include "sidebar.php" ?>
<h2>Create Data Admin</h2>
    <form action="" method="POST">
    <div class="col">
        <div class="row mt-5">
        <div class="mb-3">
            <label for="id_admin" class="form-label">Id Admin</label>
            <input type="text" class="form-control" name="id_admin" id="id_admin" placeholder="Id Admin"required>
        </div>
        <div class="mb-3">
            <label for="nama_admin" class="form-label">Name</label>
            <input type="text" class="form-control" name="nama_admin" id="nama_admin" placeholder="Masukan Name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password" required>
        </div>
        </div>
        <a href="index.php" button type="button" class="btn btn-secondary"><i class="bi bi-chevron-left"></i> Back</a>  
        <button type="submit" class="btn btn-success" name="create" onclick="return confirm('Are You Sure?')"><i class="bi bi-file-earmark-plus"></i> Create</button>
    </div>
    </form>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

