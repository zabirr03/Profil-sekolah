 <?php
    
$id_guru = $_POST['id_guru'];
$nama = $_POST['nama'];
$mapel = $_POST['mapel'];
// $kode = $_POST['kode'];
// $alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];

        $originalname = $_FILES['gambar']['name'];
        $lokasi = $_FILES['gambar']['tmp_name'];
        $size = $_FILES['gambar']['size'];
        $filename = time()."_".$originalname;


 if($size > 3000000){
    echo "<script>
    alert('data Max 1Mb')
    window.location='?page=dokumentasi/guru/edit&id_guru=".$id_guru."'</script>";
}
else{
    if(!empty($lokasi)){
        unlink("dokumentasi/guru/".$gambarLama);
        move_uploaded_file($lokasi, "dokumentasi/guru/".$filename );
        $edit = $koneksi->query("UPDATE guru SET nama='$nama',mapel='$mapel',jenis_kelamin='$jenis_kelamin',gambar='$filename' WHERE id_guru='$id_guru'");
    }
    elseif(empty($lokasi)){
        $edit = $koneksi->query("UPDATE guru SET nama='$nama',mapel='$mapel',jenis_kelamin='$jenis_kelamin' WHERE id_guru='$id_guru'");
    }
    

    if($edit == TRUE){

        echo"
        <script>
            alert('data berhasil diedit')
            window.location='?page=guru/guru'
        </script>
        ";
    }else{
        echo"
        <script>
            alert('data gagal diedit')
            window.location='?page=guru/edit&id_guru ='".$id_guru."
        </script>
        ";
    }
}
?>







