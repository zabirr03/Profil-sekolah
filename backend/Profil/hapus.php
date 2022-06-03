<?php
$id_profil = $_GET['id_profil'];
$hapus = $koneksi->query("DELETE FROM `tb_profile1` WHERE id_profil='$id_profil'");
if($hapus == TRUE){
    echo"
    <script>
        alert('data berhasil dihapus')
        window.location='?page=Profil/profil'
    </script>
    ";
}else{
    echo"
    <script>
        alert('data gagal dihapus')
       window.location='?page=Profil/profil'
    </script>
    ";
}

?>
