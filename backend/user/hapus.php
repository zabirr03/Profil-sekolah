<?php
$id = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM `user` WHERE id='$id'");
if($hapus == TRUE){
    echo"
    <script>
        alert('data berhasil dihapus')
        window.location='?page=home1'
    </script>
    ";
}else{
    echo"
    <script>
        alert('data gagal dihapus')
       window.location='?page=home1'
    </script>
    ";
}

?>
