<?php
$id_vm = $_GET['id_vm'];
$edit = $koneksi->query("SELECT * FROM `visi_misi` WHERE id_vm ='$id_vm'")->fetch_assoc();
?>
<div class="card">
<div class="card-header">
    Edit Data
</div>
<div class="card-body">
<form action="?page=visi_misi/aksi_edit" method="POST">
  <div class="form-group">
    <label for="visi">Visi</label>
    <input type="hidden" class="form-control" placeholder="Enter Nama" name="id_vm" value="<?= $edit['id_vm'] ?>">
    <textarea name="visi"class="form-control"><?= $edit['visi'] ?></textarea> 
  </div>
  <div class="form-group">
    <label for="misi">Misi</label>
    <textarea name="misi"class="form-control"><?= $edit['misi'] ?></textarea> 
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
