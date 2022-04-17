<?php
include "../koneksi.php";

$id_supplier=$_GET['id_supplier'];
$sql=mysqli_query ($koneksi,"DELETE FROM supplier WHERE id_supplier ='$id_supplier'");
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
