<?php
    $id_kontak = $_POST['id_kontak'];
    $telpon = $_POST['telpon'];
    $email = $_POST['email'];
    $ig = $_POST['ig'];
    $fb = $_POST['fb'];

        $edit = $koneksi->query("UPDATE kontak SET `telpon`='$telpon',`email`='$email',`ig`='$ig',`fb`='$fb' WHERE id_kontak='$id_kontak'");

    if($edit == TRUE){
        echo"
        <script>
            alert('data berhasil diedit')
            window.location='?page=contact/contact'
        </script>
        ";
    }else{
        echo"
        <script>
            alert('data gagal diedit')
            window.location='?page=contact/edit&id_kontak='".$id_kontak."
        </script>
        ";
    }
?>   