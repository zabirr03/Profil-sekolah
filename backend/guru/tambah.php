<div class="card">
    <div class="card-header">
        Tambah data
    </div>
    <div class="card-body">
        <form action="?page=guru/aksi_simpan" method="POST" enctype="multipart/form-data">
        <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="mapel">Status</label>
                <input type="text" name="mapel" class="form-control">
              <!-- <select class="form-control" name="mapel">
                    <option value="">--Status--</option>
                    <option value="Kepala Sekolah">Kepala Sekolah</option>
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
                <input type="text" name="kode" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control">
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
                <label for="">Foto</label>
                <input type="file" require name="gambar" width="50" rows="20" class="form-control form-control-sm">
            </div>
         
            <div align="right">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>