<?php
$id_pf = $_GET['id_pf'];
$hapus = $koneksi->query("DELETE FROM `tb_profile2` WHERE id_pf='$id_pf'");
if($hapus == TRUE){
    echo"
    <script>
        alert('Data berhasil dihapus')
        window.location='?page=Profil1/profil1'
    </script>
    ";
}else{
    echo"
    <script>
        alert('Data gagal dihapus')
       window.location='?page=Profil1/profil1'
    </script>
    ";
}

?>
