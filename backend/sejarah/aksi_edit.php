<?php
    $id_sejarah = $_POST['id_sejarah'];
    $isi = $_POST['isi'];

        $edit = $koneksi->query("UPDATE sejarah SET isi='$isi' WHERE id_sejarah ='$id_sejarah'");

    if($edit == TRUE){
        echo"
        <script>
            alert('data berhasil diedit')
            window.location='?page=sejarah/sejarah'
        </script>
        ";
    }else{
        echo"
        <script>
            alert('data gagal diedit')
            window.location='?page=sejarah/edit&id_sejarah='".$id_sejarah."
        </script>
        ";
    }
?>    