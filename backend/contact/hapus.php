<?php
$id_kontak = $_GET['id_kontak'];

$hapus = $koneksi->query("DELETE FROM `kontak` WHERE id_kontak = '$id_kontak'");
if($hapus == TRUE){
    echo"
    <script>
    alert('Data Berhasil Dihapus')
    window.location='?page=contact/contact'
    </script>
    ";
}else{
    echo"
    alert('Data Gagal Dihapus')
    window.loaction='?page=contact/contact'
    </script>
    ";
}
?>