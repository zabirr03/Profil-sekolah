<?php
$id_pf = $_POST['id_pf'];
$npsn = $_POST['npsn'];
$status = $_POST['status'];
$pendidikan = $_POST['pendidikan'];
$kepemilikan = $_POST['kepemilikan'];
$sk_pendirian = $_POST['sk_pendirian'];
$tanggal_sk_pendirian = $_POST['tanggal_sk_pendirian'];
$sk_izin = $_POST['sk_izin'];
$tanggal_sk_izin = $_POST['tanggal_sk_izin'];

$edit = $koneksi->query("UPDATE tb_profile2 SET npsn='$npsn' , status='$status', pendidikan = '$pendidikan' , kepemilikan = '$kepemilikan'
,sk_pendirian = '$sk_pendirian', tanggal_sk_pendirian = '$tanggal_sk_pendirian', sk_izin = '$sk_izin', tanggal_sk_izin = '$tanggal_sk_izin'");

if($edit == TRUE){
    echo"
    <script>
    alert('Data Berhasil Di Ubah')
    window.location='?page=Profil1/profil1'
    </script>
    ";
}else{
    echo"
    <script>
    alert('Data Gagal Di Ubah')
    window.location='?page=Profil1/edit'
    </script>
    ";
}
?>