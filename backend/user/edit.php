<?php
$id = $_GET['id'];
// var_dump($id); exit;
$edit = $koneksi->query("SELECT * FROM `user` WHERE id='$id'")->fetch_assoc();
?>

<div class="card">
    <div class="card-header">
        Edit data
    </div>
    <div class="card-body">
        <form action="?page=user/aksi_edit" method="POST">
            <div class="form-group">
                <label for="">Username</label>
                <input type="hidden" name="id" value="<?= $edit['id']?>" class="form-control">
                <input type="text" name="username" value="<?= $edit['username'] ?>" class="form-control"
                    placeholder="Isi Username Anda" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" value="<?= $edit['email'] ?>" class="form-control"
                    placeholder="Isi Username  Anda " required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div align="right">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>