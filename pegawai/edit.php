<?php
include "../koneksi.php";

$id_pegawai=$_GET['id_pegawai'];
$query=mysqli_query ($koneksi," SELECT * FROM pegawai WHERE id_pegawai='$id_pegawai'");
$r=mysqli_fetch_array($query);
if(isset($_POST['edit'])){
    $id_pegawai=$_POST['id_pegawai'];    
    $nama_pegawai=$_POST['nama_pegawai'];
    $jk_pegawai = $_POST['jk_pegawai'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $sql=mysqli_query($koneksi,"UPDATE pegawai SET id_pegawai='$id_pegawai', nama_pegawai='$nama_pegawai',jk_pegawai='$jk_pegawai', no_telp='$no_telp', alamat='$alamat'  WHERE id_pegawai='$id_pegawai'" );
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
<h2>Edit Data Pegawai</h2>
<div class="col">
    <div class="row mt-5">
        <form class="form-input" method="POST">
        <div class="mb-3">
                <label for="id_pegawai" class="form-label">Id Pegawai</label>
                <input type="text" name="id_pegawai" value="<?php echo $r['id_pegawai']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="nama_pegawai" class="form-label">Nama</label>
                <input type="text" name="nama_pegawai" value="<?php echo $r['nama_pegawai']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="jk_pegawai" class="form-label">Jenis Kelamin</label>
                <select name="jk_pegawai" id="jk_pegawai" class="form-select">
                    <option value="Perempuan" <?php if ($r['jk_pegawai'] == "Perempuan") echo "selected" ?>>Perempuan</option>
                    <option value="Laki-laki" <?php if ($r['jk_pegawai'] == "Laki-laki") echo "selected" ?>>Laki-laki</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telepon</label>
                <input type="number" name="no_telp" value="<?php echo $r['no_telp']?>" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="alamat" name="alamat" value="<?php echo $r['alamat']?>" class="form-control" >
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

