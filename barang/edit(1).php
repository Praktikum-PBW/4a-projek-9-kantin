<?php
include "../koneksi.php";

$id_barang=$_GET['id_barang'];
$query=mysqli_query ($koneksi," SELECT * FROM barang WHERE id_barang='$id_barang'");
$r=mysqli_fetch_array($query);
if(isset($_POST['edit'])){
    $id_barang=$_POST['id_barang'];
    $nama_barang =$_POST['nama_barang'];
    $jenis_barang=$_POST['jenis_barang'];
    $hrg_jual = $_POST['harga_jual'];
    $hrg_beli = $_POST['harga_beli'];
    $jml_barang= $_POST['jumlah_barang'];
    $sql=mysqli_query($koneksi,"UPDATE barang SET id_barang='$id_barang', nama_barang='$nama_barang',jenis_barng='$barang', harga_jual='$hrg_jual', harga_beli='$hrg_beli', jumlah_barang='$jml_barang' WHERE id_barang='$id_barang'" );
    if ($sql){
        echo"
            <script> 
            alert('Data Berhasil diedit!');
            document.location.href='index.php';
            </script>
        ";
    } else{
        echo"
        <script> 
        alert('Data Gagal diedit!');
        document.location.href='index.php';
        </script>
    "; 
    }
}
?>
<?php include "sidebar.php" ?>
<h2>Edit Data Barang</h2>
<div class="col">
    <div class="row mt-5">
        <form class="form-input" method="POST">
        <div class="mb-3">
                <label for="id_barang" class="form-label">Id Barang</label>
                <input type="text" name="id_barang" value="<?php echo $r['id_barang']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama</label>
                <input type="text" name="nama_barang" value="<?php echo $r['nama_barang']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="jenis_barang" class="form-label">Jenis Barang</label>
                <input type="text" name="jenis_barang" value="<?php echo $r['jenis_barang']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="harga_jual" class="form-label">Harga Jual</label>
                <input type="text" name="harga_jual" value="<?php echo $r['harga_jual']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="harga_beli" class="form-label">Harga Beli</label>
                <input type="text" name="harga_beli" value="<?php echo $r['harga_beli']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                <input type="number" name="jumlah_barang" value="<?php echo $r['jumlah_barang']?>" class="form-control" >
            </div>
            <a href="index.php" button type="button" class="btn btn-secondary"><i class="bi bi-chevron-left"></i> Kembali</a>  
            <button type="submit" class="btn btn-success" name="edit" onclick="return confirm('Are you sure?')"><i class="bi bi-file-earmark-plus"></i> Simpan</button>    
        </form>                                     
    </div>
        
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>

