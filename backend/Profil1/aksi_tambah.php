<?php 
$npsn = $_POST['npsn'];
$status = $_POST['status'];
$pendidikan = $_POST['pendidikan'];
$kepemilikan = $_POST['kepemilikan'];
$sk_pendirian = $_POST['sk_pendirian'];
$tanggal_sk_pendirian = $_POST['tanggal_sk_pendirian'];
$sk_izin = $_POST['sk_izin'];
$tanggal_sk_izin = $_POST['tanggal_sk_izin'];

$simpan = $koneksi->query("INSERT INTO `tb_profile2`(`npsn`,`status`,`pendidikan`,`kepemilikan`,`sk_pendirian`,`tanggal_sk_pendirian`,`sk_izin`,
`tanggal_sk_izin`) values ('$npsn','$status','$pendidikan','$kepemilikan','$sk_pendirian','$tanggal_sk_pendirian','$sk_izin','$tanggal_sk_izin')");
if($simpan == TRUE){
    echo"
    <script>
    alert('Data Berhasil Disimpan')
    window.location='?page=Profil1/profil1'
    </script>
    ";
}else{
    echo"
    <script>
    alert('Data Gagal Disimpan')
    window.location='?page=Profil1/tambah'
    </script>
    ";
}

?>
