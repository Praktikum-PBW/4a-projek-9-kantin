<?php 
include "../koneksi.php";
if(isset($_POST['create'])){
    $id_barang=$_POST['id_barang'];
    $nama_barang =$_POST['nama_barang'];
    $jenis_barang=$_POST['jenis_barang'];
    $hrg_jual = $_POST['harga_jual'];
    $hrg_beli = $_POST['harga_beli'];
    $jml_barang= $_POST['jumlah_barang'];
    $get_user = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id_barang'");
    if(mysqli_num_rows($get_user)>0){
        echo "<script>alert('Id Barang telah di gunakan!');
		window.location.replace('create.php')</script>";
    }else{
        $sql = mysqli_query($koneksi,"INSERT INTO barang VALUES('$id_barang','$nama_barang','$jenis_barang','$hrg_jual','$hrg_beli','$jml_barang')");
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
<h2>Create Data Barang</h2>
    <form action="" method="POST">
    <div class="col">
        <div class="row mt-5">
        <div class="mb-3">
            <label for="id_barang" class="form-label">Id Barang</label>
            <input type="text" class="form-control" name="id_barang" id="id_barang" placeholder="Id Barang" required>
        </div> 
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Name</label>
            <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukan Name" required>
        </div>
        <div class="mb-3">
            <label for="jenis_barang" class="form-label">Jenis Barang</label>
            <input type="text" class="form-control" name="jenis_barang" id="jenis_barang" placeholder="Masukan Jenis Barang" required>
        </div>
        <div class="mb-3">
            <label for="harga_jual" class="form-label">Harga Jual</label>
            <input type="text" class="form-control" name="harga_jual" id="harga_jual" placeholder="Masukan Harga" required>
        </div>
        <div class="mb-3">
        <div class="mb-3">
            <label for="harga_beli" class="form-label">Harga Beli</label>
            <input type="text" class="form-control" name="harga_beli" id="harga_beli" placeholder="Masukan Harga" required>
        </div>
        <div class="mb-3">
            <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
            <input type="number" class="form-control" name="jumlah_barang" id="jumlah_barang" placeholder="Masukan Jumlah" required>
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

