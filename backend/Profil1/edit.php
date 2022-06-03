<?php
$id_pf = $_GET['id_pf'];
$edit = $koneksi->query("SELECT * FROM `tb_profile2` WHERE id_pf = '$id_pf'")->fetch_assoc();
?>

<div class="card">
    <div class="card-header">
        Edit Data
    </div>
    <div class="card-body">
        <form action="?page=Profil1/aksi_edit" method="POST">
            <div class="form-group">
                <label for="npsn">NPSN</label>
                <input type="hidden" class="form-control" name="id_pf" value="<?= $edit['id_pf'] ?>">
                <input type="text" class="form-control" name="npsn" value="<?= $edit['npsn'] ?> ">
            </div>
            <div class="form-group">
                <label for="status">Status Kependidikan</label>
                <input type="text" class="form-control" name="status" value="<?= $edit['status'] ?> ">
            </div>
            <div class="form-group">
                <label for="pendidikan">Bentuk Kependidikan</label>
                <input type="text" class="form-control" name="pendidikan" value="<?= $edit['pendidikan'] ?>">
            </div>
            <div class="form-group">
                <label for="kepemilikan">Status Kepemilikan</label>
                <input type="text" name="kepemilikan" class="form-control" value="<?= $edit['kepemilikan'] ?>">
            </div>
            <div class="form-group">
                <label for="sk_pendirian">SK Pendirian Sekolah</label>
                <input type="text" name="sk_pendirian" class="form-control" value="<?= $edit['sk_pendirian'] ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_sk_pendirian">SK Pendirian Sekolah</label>
                <input type="date" name="tanggal_sk_pendirian" class="form-control" value="<?= $edit['tanggal_sk_pendirian'] ?>">
            </div>
            <div class="form-group">
                <label for="sk_izin">SK Izin Operasional</label>
                <input type="text" name="sk_izin" class="form-control" value="<?= $edit['sk_izin'] ?>">
            </div>
            <div class="form-group">
                <label for="tanggal_sk_izin">Tanggal SK Izin Operasional</label>
                <input type="date" name="tanggal_sk_izin" class="form-control" value="<?= $edit['tanggal_sk_izin'] ?>">
            </div>
        <div align="right">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
        </form>
    </div>
</div>