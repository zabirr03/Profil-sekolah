<?php
    $nama = $_POST['nama'];
      $deskripsi = $_POST['deskripsi'];
    
      $originalname = $_FILES['foto']['name'];
      $lokasi = $_FILES['foto']['tmp_name'];
      $size = $_FILES['foto']['size'];
      $error = $_FILES['foto']['error'];
      $filename = time()."_".$originalname;

    $simpan = $koneksi->query("INSERT INTO `sarana_prasarana`(`nama`,`foto`,`deskripsi`) VALUES ('$nama','$filename','$deskripsi')");

    if($simpan == True){
             move_uploaded_file($lokasi,'foto/'.$filename);
            echo"<script>
                alert('data berhasil disimpan')
                window.location='?page=sarana_prasarana/sarana_prasarana'
              </script>";
        }else{
            echo"<script>
                alert('data Gagal disimpan')
                window.location='?page=sarana_prasarana/tambah'
              </script>";
         
        }
     // cek apakah yang diupload adalah gambar atau bukan
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
    // generate nama gambar baru
     $namaFileBaru = uniqid();
     $namaFileBaru .='.';
     $namaFileBaru .= $ekstensiGambar;

     return $namaFileBaru;

?>