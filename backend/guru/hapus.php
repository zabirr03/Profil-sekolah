<?php
$id_guru = $_GET['id_guru'];
$hapus = $koneksi->query("DELETE FROM `guru` WHERE id_guru='$id_guru'");
if($hapus == TRUE){
    echo"
    <script>
        alert('data berhasil dihapus')
        window.location='?page=guru/guru'
    </script>
    ";
}else{
    echo"
    <script>
        alert('data gagal dihapus')
       window.location='?page=guru/guru'
    </script>
    ";
}

?>
