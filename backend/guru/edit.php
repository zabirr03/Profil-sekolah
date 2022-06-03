<?php
$id_guru = $_GET['id_guru'];
$edit = $koneksi->query("SELECT * FROM `guru` WHERE id_guru ='$id_guru'")->fetch_assoc();
  
?>

<div class="card">
    <div class="card-header">
        Edit 
    </div>
    <div class="card-body">
        <form action="?page=guru/aksi_edit" method="POST" enctype="multipart/form-data">
            <div class="form-group">
               <label for="nama">Nama</label>
          <input type="hidden" class="form-control" placeholder="" name="id_guru" value="<?= $edit['id_guru'] ?>">
         <input type="text" class="form-control" placeholder="" name="nama" value="<?= $edit['nama'] ?>" >
                </div>
                <div class="form-group">
                    <label for="mapel">Status</label>
                    <input type="text" name="mapel" class="form-control">
              <!-- <select class="form-control" name="mapel">
                    <option value="">--Status--</option>
                    <option value="kepala Sekolah">Kepala Sekolah</option>
                    <option value="Wakil Kepala Sekolah">Wakil Kepala Sekolah</option>
                    <option value="Kesiswaan">Kesiswaan</option>
	    			<option value="Pemograman Dasar">Pemograman Dasar</option>
	    			<option value="Basis Data">Basis Data</option>
                    <option value="Pemograman Berorientasi Objek">Pemograman Berorientasi Objek</option>
                    <option value="PPL">PPL</option>
                    <option value="MTK">MTK</option>
                    <option value="PPKN">PPKN</option>
                    <option value="Pendidikan Agama Islam">Pendidikan Agama Islam</option>
                    <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                    <option value="Bahasa Inggris">Bahasa Inggris</option>
                    <option value="Sejarah">Sejarah</option>
                    <option value="PWPB">PWPB</option>
                    <option value="PJOK">PJOK</option> 
	    		</select> -->
                </div>
                <!-- <div class="form-group">
                    <label for="kode">Kode Guru</label>
                    <input type="text" class="form-control" placeholder="" name="kode" value="<?= $edit['kode'] ?>">
                </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
        <input type="text" class="form-control" placeholder="" name="alamat" value="<?= $edit['alamat'] ?>" >
            </div> -->
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
              <select class="form-control" name="jenis_kelamin">
                    <option value="">--Jenis Kelamin--</option>
	    			<option value="Laki-laki">Laki-laki</option>
	    			<option value="Perempuan">Perempuan</option>
	    		</select>
            </div>
            <div class="form-group">
                <img src="dokumentasi/guru/<?= $edit['gambar'] ?>" width="200" alt="">
            </div>
            <div class="form-group">
                <input type="hidden" name="gambarLama" value="<?= $edit['gambar'] ?>">
            </div>
            <div class="form-group">
                <label for="">Foto</label>
                <input type="file" name="gambar" class="form-control form-control-sm" require>
            </div>
       <div align="right">   
  <button type="submit" class="btn btn-primary">Submit</button>
</div>  
</form>
</div>
</div>
