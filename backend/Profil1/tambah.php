<div class="card">
    <div class="card-header">
        Tambah Data
    </div>
    <div class="card-body">
        <form action="?page=Profil1/aksi_tambah" method="POST">
            <div class="form-group">
                <label for="npsn">NPSN</label>
                <input type="text" name="npsn" class="form-control">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" name="status" class="form-control">
            </div>
            <div class="form-group">
                <label for="pendidikan">Bentuk Kependidikan</label>
                <input type="text" name="pendidikan" class="form-control">
            </div>
            <div class="form-group">
                <label for="kepemilikan">Status kepemilikan</label>
                <input type="text" name="kepemilikan" class="form-control">
            </div>
            <div class="form-group">
                <label for="sk_pendirian">SK Pendirian Sekolah</label>
                <input type="text" name="sk_pendirian" class="form-control">
            </div>
            <div class="form-group">
                <label for="tanggal_sk_pendirian">Tanggal SK Pendirian</label>
                <input type="date" name="tanggal_sk_pendirian" class="form-control">
            </div>
            <div class="form-group">
                <label for="sk_izin">SK Izin Operasional</label>
                <input type="text" name="sk_izin" class="form-control">
            </div>
        <div class="form-group">
            <label for="tanggal_sk_izin">Tanggal SK Izin Operasional</label>
            <input type="date" name="tanggal_sk_izin" class="form-control">
        </div>
        <div align="right">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
        </form>
    </div>
</div>