<?php
    $id_vm = $_POST['id_vm'];
    $visi = $_POST['visi'];
    $misi = $_POST['misi'];

        $edit = $koneksi->query("UPDATE visi_misi SET `visi`='$visi',`misi`='$misi' WHERE id_vm='$id_vm'");

    if($edit == TRUE){
        echo"
        <script>
            alert('data berhasil diedit')
            window.location='?page=visi_misi/visi_misi'
        </script>
        ";
    }else{
        echo"
        <script>
            alert('data gagal diedit')
            window.location='?page=visi_misi/edit&id_vm='".$id_vm."
        </script>
        ";
    }
?>    