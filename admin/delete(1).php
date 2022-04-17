<?php
include "../koneksi.php";
require "session.php";

$id_admin=$_GET['id_admin'];
$sql=mysqli_query ($koneksi,"DELETE FROM tb_admin WHERE id_admin='$id_admin'");
if ($sql){
    echo"
        <script> 
        alert('Data Berhasil dihapus!');
        document.location.href='index.php';
        </script>
    ";
} else{
    echo"
    <script> 
    alert('Data Gagal dihapus!');
    document.location.href='index.php';
    </script>
"; 
}

?>
