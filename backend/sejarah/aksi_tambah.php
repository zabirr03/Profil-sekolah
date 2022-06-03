<?php
    $isi = $_POST['isi'];

    $simpan = $koneksi->query("INSERT INTO `sejarah`( `isi`) VALUES  ('$isi')");

    if($simpan == TRUE){
        echo"
        <script>
            alert('data berhasil disimpan')
            window.location='?page=sejarah/sejarah'
        </script>
        ";
    }else{
        echo"
        <script>
            alert('data gagal disimpan')
            window.location='?page=sejarah/tambah'
        </script>
        ";
    }

?>