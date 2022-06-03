 <?php
    $judul = $_POST['judul'];
    // $npsn = $_POST['npsn'];
    $alamat = $_POST['alamat'];
    $akreditas = $_POST['akreditas'];
    $isi = $_POST['isi'];
    
    $originalname = $_FILES['gambar']['name'];
    $lokasi = $_FILES['gambar']['tmp_name'];
    $size = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $filename = time()."_".$originalname;

    $simpan = $koneksi->query("INSERT INTO tb_profile1 ( `judul`, `alamat`, `akreditas`, `isi`, `gambar`) VALUES ('$judul','$alamat','$akreditas','$isi','$filename')");

    if($simpan == True){
            move_uploaded_file($lokasi,'dokumentasi/foto/'.$filename);
            echo"<script>
                alert('data berhasil disimpan')
                window.location='?page=Profil/profil'
              </script>";
        }else{
            echo"<script>
                alert('data Gagal disimpan')
                window.location='?page=Profil/tambah'
              </script>";
         
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

