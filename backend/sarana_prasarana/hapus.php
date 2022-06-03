<?php
$id_sp = $_GET['id_sp'];
$hapus = $koneksi->query("DELETE FROM sarana_prasarana WHERE id_sp='$id_sp'");
if($hapus == TRUE){
    echo"
    <script>
    alert('data berhasil dihapus')
    window.location='?page=sarana_prasarana/sarana_prasarana'
    </script>
    ";
}else{
    echo"
    <script>
    alert('data gagal diubah')
    window.location='?page=sarana_prasarana/sarana_prasarana'
    </script>
    ";
}
?>