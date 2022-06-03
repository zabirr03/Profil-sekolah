            <div class="card">
                <div class="card-header">
                   Input Data
                </div>
            <div class="card-body">
                <form method="post" action="?page=sarana_prasarana/aksi_tambah" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" >
                    </div>
                     <div class="form-group">
                        <label for="foto">Gambar</label>
                        <input type="file" id="" name="foto" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control"  name="deskripsi" class="form-control" width="40" rows="5" input type="text"></textarea>
        </div>  
                    <div align="right">
                        <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                        <button type="reset" class="btn btn-danger" name="reset">Reset</button>
                    </div>
                </form>
            </div>
            </div>
