<?php
$id_kontak = $_GET['id_kontak'];
$edit = $koneksi->query("SELECT * FROM `kontak` WHERE id_kontak ='$id_kontak'")->fetch_assoc();
?>
<div class="card">
<div class="card-header">
    Edit Data
</div>
<div class="card-body">
<form action="?page=contact/aksi_edit" method="POST">
  <div class="form-group">
    <label for="telpon">Telpon</label>
    <input type="hidden" class="form-control" placeholder="Enter Nama" name="id_kontak" value="<?= $edit['id_kontak'] ?>">
    <input type="text" class="form-control" placeholder="" name="telpon" value="<?= $edit['telpon'] ?>" >
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" placeholder="" name="email" value="<?= $edit['email'] ?>">
  </div>
<div class="form-group">
    <label for="ig">Instagram</label>
    <textarea name="ig" id="" cols="30" rows="3" class="form-control"><?= $edit['ig']?> </textarea>
</div>
<div class="form-group">
    <label for="fb">Facebook</label>
    <textarea name="fb" id="" cols="25" rows="3" class="form-control"><?= $edit['fb']?> </textarea>
</div>
<div align="right">
  <button type="submit" class="btn btn-success">Submit</button>
  </div>
</form>
</div>
</div>
