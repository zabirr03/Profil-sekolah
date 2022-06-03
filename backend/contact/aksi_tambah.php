<?php
    $telpon = $_POST['telpon'];
    $email = $_POST['email'];
    $ig = $_POST['ig'];
    $fb = $_POST['fb'];

    $simpan = $koneksi->query("INSERT INTO `kontak`(`telpon`,`email`,`ig`,`fb`) VALUES ('$telpon','$email','$ig','$fb')");

    if($simpan == TRUE){
        echo"
        <script>
        alert('Data Berhasil Disimpan')
        window.location='?page=contact/contact'
        </script>
        ";
    }else{
        echo"
        <script>
        alert('Data Gagal Disimpan')
        window.location='?page=contact/tambah'
        </script>
        ";
    }
?>