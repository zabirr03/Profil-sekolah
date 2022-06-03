<?php
$id_sp = $_GET['id_sp'];
$edit = $koneksi->query("SELECT * FROM `sarana_prasarana` WHERE id_sp='$id_sp'")->fetch_assoc();
?>
<div class="card">
<div class="card-header">
    Tambah Data 
</div>
<div class="card-body">
<form action="#" method="POST"  enctype="multipart/form-data">
<input type="hidden" class="form-control" placeholder="Enter Nama" name="id_sp" value="<?= $edit['id_sp'] ?>">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" placeholder="" name="nama" value="<?= $edit['nama']?>">
  </div>
  <div class="form-group">
  	<img src="foto/<?= $edit['foto'] ?>" width="200" alt="">
  </div>
  <div class="form-group">
  	<input type="hidden" name="foto_lama" value="<?= $edit['foto'] ?>">
  </div>
  <div class="form-group">
    <label for="">Dokumentasi</label>
    <input type="file" require name="foto" class="form-control form-control-sm">
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control" > </textarea> 
  <div align="right">
      <br>
  <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
</form>
<?php
	if(isset($_POST['simpan'])){

	$id_sp = $_POST['id_sp'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    
    $originalname = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $size = $_FILES['foto']['size'];
    $filename = time()."_".$originalname;

    if($size > 3000000){
    	echo "<script>
    	alert('data Max 1Mb')
    	window.location='?page=edit&id_sp=".$id_sp."'</script>";
    }
    else{
    	 if(!empty($lokasi)){
    	 	unlink("foto/".$foto_lama);
    	 	move_uploaded_file($lokasi, "foto/".$filename );
    	 	$update = $koneksi->query("UPDATE sarana_prasarana SET nama='$nama',deskripsi='$deskripsi',foto='$filename' WHERE id_sp='$id_sp'");
    	 }
      elseif(empty($lokasi)){
    		$update = $koneksi->query("UPDATE sarana_prasarana SET nama='$nama',deskripsi='$deskripsi' WHERE id_sp='$id_sp'");
    	 }
    	
    	if($update == True){
    		echo"
        <script>
            alert('data berhasil diedit')
            window.location='?page=sarana_prasarana/sarana_prasarana'
        </script>
        ";
    	}
    	else{
    		echo"<script>
                alert('data Gagal diedit')
                window.location='?page=sarana_prasarana/edit&id_sp=".$id_sp."'
              </script>";
    	}
    }
  }
?>
</div>
</div>