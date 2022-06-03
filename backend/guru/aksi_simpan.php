<?php
$nama = $_POST['nama'];
$mapel = $_POST['mapel'];
// $kode = $_POST['kode'];
// $alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

$originalname = $_FILES['gambar']['name'];
$lokasi = $_FILES['gambar']['tmp_name'];
$size = $_FILES['gambar']['size'];
$error = $_FILES['gambar']['error'];
$filename = time()."_".$originalname;

$simpan = $koneksi->query("INSERT INTO guru (`nama`, `mapel`, `jenis_kelamin`, `gambar`) VALUES ('$nama','$mapel','$jenis_kelamin','$filename')");
if($simpan == TRUE){
    move_uploaded_file($lokasi,'dokumentasi/guru/'.$filename);
    echo"
    <script>
        alert('data berhasil disimpan')
        window.location='?page=guru/guru'
    </script>
    ";
}else{
    echo"
    <script>
        alert('data gagal disimpan')
        window.location='?page=guru/tambah'
    </script>
    ";
}
//cek apakah yang diupload adalah gambar atau bukan
$ekstensiGambarValid = ['jpg','jpeg','png'];
$ekstensiGambar = explode('.', $originalname);
$ekstensiGambar = strtolower(end($ekstensiGambar));
if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
  echo"<script>
  alert('Maaf,Kami hanya menerima file yang berekstensi jpg,jpeg dan png')
  </script>";
  return false;
}
//cek jika ukuran gambar terlalu besar
if($ukuranFile > 1000000){
  echo"
  <script>
  alert('ukuran file max 1mb')
  </scripr>";
  return false;
}
//generate nama gambar baru
$namaFileBaru = uniqid();
$namaFileBaru .='.';
$namaFileBaru .= $ekstensiGambar;

return $namaFileBaru;
?>
    
    

