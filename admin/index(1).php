<?php include "sidebar.php" ?>

<h2>Admin</h2>
<a href="create.php" type="button" class="btn btn-secondary"><i class="bi bi-file-earmark-plus"></i> Tambah data</a>
<a href="../home.php" type="button" class="btn btn-secondary"><i class="bi bi-box-arrow-left"></i> Keluar</a>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id Admin</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col" class="center">Delete | Edit | Lihat</th>
            </tr>
          </thead>
          <tbody>
          <?php 
          $query=mysqli_query ($koneksi,"SELECT * FROM tb_admin ORDER BY id_admin");
          $no=1;
          while($r= mysqli_fetch_array($query)){
            echo"<tr>
            <th scope='row'>$no</th>
            <td>$r[id_admin]</td>
            <td>$r[nama_admin]</td>
            <td>$r[email]</td>
            <td>$r[username]</td>
            <td class='hidetext'>$r[password]</td>
            <td>
            <a href='delete.php?id_admin=$r[id_admin]' button type='button' class='btn btn-danger' onclick='return confirm('Are You Sure?')'><i class='bi bi-trash'></i></a>
            <a href='edit.php?id_admin=$r[id_admin]'button type='button' class='btn btn-warning'><i class='bi bi-pencil-fill'></i></a>
            <a href='lihat.php?id_admin=$r[id_admin]'button type='button' class='btn btn-success'><i class='bi bi-eye-fill'></i></a>
            </td>
          </tr>";
          $no++;
          }
        ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
