<?php 
include "../koneksi.php";
if(isset($_POST['create'])){
    $id_supplier =$_POST['id_supplier'];
    $nama_supplier =$_POST['nama_supplier'];
    $jk_supplier = $_POST['jk_supplier'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $get_user = mysqli_query($koneksi, "SELECT * FROM supplier WHERE id_supplier='$id_supplier'");
    if(mysqli_num_rows($get_user)>0){
        echo "<script>alert('Id Supplier sudah digunakan!');
		window.location.replace('create.php')</script>";
    }else{
        $sql = mysqli_query($koneksi,"INSERT INTO supplier VALUES('$id_supplier','$nama_supplier','$jk_supplier','$no_telp','$alamat')");
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
<h2>Create Data Supplier</h2>
    <form action="" method="POST">
    <div class="col">
        <div class="row mt-5">
        <div class="mb-3">
            <label for="id_supplier" class="form-label">Id Supplier</label>
            <input type="text" class="form-control" name="id_supplier" id="id_supplier" placeholder="Id Supplier" required>
        </div>
        <div class="mb-3">
            <label for="nama_supplier" class="form-label">Name</label>
            <input type="text" class="form-control" name="nama_supplier" id="nama_supplier" placeholder="Masukan Name" required>
        </div>
        <div class="mb-2">
                <label for="jk_supplier" class="form-label">Jenis Kelamin</label>
                <select name="jk_supplier" id="jk_supplier" class="form-select" placeholder="Pilih Jenis Kelamin" required>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Laki-laki">Laki-laki</option>
                </select>
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">No Telepon</label>
            <input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="Masukan No Telepon" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="textarea" class="form-control" name="alamat" id="alamat" placeholder="Masukan Alamat" required>
        </div>
        </div>
    </div>
    <a href="index.php" button type="button" class="btn btn-secondary"><i class="bi bi-chevron-left"></i> Back</a>  
    <button type="submit" class="btn btn-success" name="create" onclick="return confirm('Are You Sure?')"><i class="bi bi-file-earmark-plus"></i> Create</button>
    </form>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

