<?php
include "../koneksi.php";
$id_barang=$_GET['id_barang'];
$query=mysqli_query ($koneksi," SELECT * FROM barang WHERE id_barang='$id_barang'");
$r=mysqli_fetch_array($query);
?>
<?php include "sidebar.php" ?>
<h2>Lihat Data Barang</h2>
    <div class="col">
        <div class="row mt-5">
        <form class="form-input" method="POST">
        <div class="mb-3">
                <label for="id_barang" class="form-label">Id Barang</label>
                <input type="text" name="id_barang" value="<?php echo $r['id_barang']?>" class="form-control" readonly>
            </div>
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Name</label>
                <input type="text" name="nama_barang" value="<?php echo $r['nama_barang']?>" class="form-control" readonly>
            </div>
            <div class="mb-3">
                <label for="jenis_barang" class="form-label">Jenis Barang</label>
                <input type="text" name="jenis_barang" value="<?php echo $r['jenis_barang']?>" class="form-control" readonly>
            </div>
            <div class="mb-3">
                <label for="harga_jual" class="form-label">Harga Jual</label>
                <input type="text" name="harga_jual" value="<?php echo $r['harga_jual']?>" class="form-control" readonly>
            </div>
            <div class="mb-3">
                <label for="harga_beli" class="form-label">Harga Beli</label>
                <input type="text" name="harga_beli" value="<?php echo $r['harga_beli']?>" class="form-control" readonly>
            </div>
            <div class="mb-3">
                <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
                <input type="number" name="jumlah_barang" value="<?php echo $r['jumlah_barang']?>" class="form-control" readonly>
            </div>
            <a href="index.php" button type="button" class="btn btn-secondary"><i class="bi bi-chevron-left"></i> Kembali</a>       
        </form>                                  
    </div>

    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>