<?php 
$id_sejarah = $_GET['id_sejarah'];
$hapus = $koneksi->query("DELETE FROM `sejarah`WHERE id_sejarah='$id_sejarah'");

if($hapus == TRUE){
    echo"
    <script>
    alert('data berhasil dihapus')
    window.location='?page=sejarah/sejarah'
    </script>
    ";
}else{
    echo"
    <script>
    alert('data gagal dihapus')
    window.location='?page=sejarah/sejarah'
    </script>
    ";
}
?>