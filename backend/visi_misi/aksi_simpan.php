<?php
    $visi= $_POST['visi'];
    $misi = $_POST['misi'];
    
    $simpan = $koneksi->query("INSERT INTO `visi_misi`( `visi`, `misi`) VALUES  ('$visi','$misi')");

    if($simpan == TRUE){
        echo"
        <script>
            alert('data berhasil disimpan')
            window.location='?page=visi_misi/visi_misi'
        </script>
        ";
    }else{
        echo"
        <script>
            alert('data gagal disimpan')
            window.location='?page=visi_misi/tambah'
        </script>
        ";
    }

?>