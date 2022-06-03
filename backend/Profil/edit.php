<?php
$id_profil = $_GET['id_profil'];
$edit = $koneksi->query("SELECT * FROM `tb_profile1` WHERE id_profil ='$id_profil'")->fetch_assoc();
?>

<div class="card">
    <div class="card-header">
        Edit Profile
    </div>
    <div class="card-body">
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="hidden" name="id_profil" class="form-control" value="<?= $edit['id_profil'] ?>">
                <input type="text" name="judul" value="<?= $edit['judul'] ?>" class="form-control"
                    placeholder="Isi Judul Anda" required>
            </div>
            <div class="form-group">
                <img src="dokumentasi/foto/<?= $edit['gambar'] ?>" width="200" alt="">
            </div>
            <div class="form-group">
                <input type="hidden" name="gambarLama" value="<?= $edit['gambar'] ?>">
            </div>
            <div class="form-group">
                <label for="">Dokumentasi</label>
                <input type="file" name="gambar" class="form-control form-control-sm" require>
            </div>
            <!-- <div class="form-group">
                <label for="npsn">NPSN</label>
                <input type="text" name="npsn" value="<?= $edit['npsn'] ?>"class="form-control" required>
            </div> -->
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" value="<?= $edit['alamat'] ?>" class="form-control"
                    placeholder="Isi Alamat  Anda " required>
            </div>
            <div class="form-group">
                <label for="akreditas">Akreditas</label>
                <select name="akreditas" id="" class="form-control"  required>
                    <option value="">Silahkan Dipilih</option>
                    <option value="Akreditasi A">Akreditas A</option>
                    <option value="Akreditasi B">Akreditas B</option>
                </select>

            </div>

            <div class="form-group">
                <label for="isi">Biografi</label>
                <textarea name="isi" id="" cols="30" rows="10" class="form-control"><?= $edit['isi']?> </textarea>
            </div>
            <div align="right">
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>
        </form>
        <?php
	if(isset($_POST['simpan'])){

        $id_profil = $_POST['id_profil'];
        $judul = $_POST['judul'];
        $npsn = $_POST['npsn'];
        $alamat = $_POST['alamat'];
        $akreditas = $_POST['akreditas'];
        $isi = $_POST['isi'];
    
        $originalname = $_FILES['gambar']['name'];
        $lokasi = $_FILES['gambar']['tmp_name'];
        $size = $_FILES['gambar']['size'];
        $filename = time()."_".$originalname;


    if($size > 10000000){
    	echo "<script>
    	alert('data Max 1Mb')
    	window.location='?page=dokumentasi/foto/edit&id_profil=".$id_profil."'</script>";
    }
    else{
    	if(!empty($lokasi)){
    		unlink("dokumentasi/foto/".$gambarLama);
    		move_uploaded_file($lokasi, "dokumentasi/foto/".$filename );
    		$update = $koneksi->query("UPDATE tb_profile1 SET judul='$judul',npsn='$npsn',alamat='$alamat',akreditas='$akreditas',isi='$isi',gambar='$filename' WHERE id_profil='$id_profil'");
    	}
    	elseif(empty($lokasi)){
    		$update = $koneksi->query("UPDATE tb_profile1 SET judul='$judul',npsn='$npsn',alamat='$alamat',akreditas='$akreditas',isi='$isi' WHERE id_profil='$id_profil'");
    	}
    	
    	if($update == True){
    		echo"
        <script>
            alert('data berhasil diedit')
            window.location='?page=Profil/profil'
        </script>
        ";
    	}
    	else{
    		echo"<script>
                alert('data Gagal diedit')
                window.location='?page=Profil/edit&id_profil=".$id_profil."'
              </script>";
    	}
    }
}

?>

    </div>
</div>