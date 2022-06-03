<?php
$id_vm = $_GET['id_vm'];
$hapus = $koneksi->query("DELETE FROM `visi_misi` WHERE id_vm ='$id_vm'");
if($hapus == TRUE){
    echo"
    <script>
        alert('data berhasil dihapus')
        window.location='?page=visi_misi/visi_misi'
    </script>
    ";
}else{
    echo"
    <script>
        alert('data gagal dihapus')
        window.location='?page=visi_misi/visi_misi'
    </script>
    ";
}
?>