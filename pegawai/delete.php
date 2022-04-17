<?php
include "../koneksi.php";

$id_pegawai=$_GET['id_pegawai'];
$sql=mysqli_query ($koneksi,"DELETE FROM pegawai WHERE id_pegawai ='$id_pegawai'");
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
