<div class="card">
    <div class="card-header">
        Tambah data
    </div>
    <div class="card-body">
        <form action="?page=Profil/aksi_simpan" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="judul">Nama Sekolah</label>
                <input type="text" name="judul" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Dokumentasi</label>
                <input type="file" require name="gambar" width="50" rows="20" class="form-control form-control-sm">
            </div>
            <!-- <div class="form-group">
                <label for="npsn">NPSN</label>
                <input type="text" name="npsn" class="form-control">
            </div> -->
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label for="akreditas">Akreditas</label>
                <select class="form-control" name="akreditas">
                    <option value="">Silahkan Dipilih</option>
                    <option value="Akreditas B">Akreditas A</option>
                    <option value="Akreditas B">Akreditas B</option>
                </select>
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <textarea class="form-control" cols="30" rows="5" input type="text" name="isi"></textarea>
            </div>
            <div align="right">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>