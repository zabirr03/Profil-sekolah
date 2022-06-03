<?php
$id_sejarah = $_GET['id_sejarah'];

$edit = $koneksi->query("SELECT * FROM  `sejarah` WHERE id_sejarah ='$id_sejarah'")->fetch_assoc();
?>
<div class="card">
    <div class="card-header">
        Edit Sejarah
    </div>
    <div class="card-body">
        <form action="?page=sejarah/aksi_edit" method="POST">
            <div class="form-group">
                <label for="isi">Sejarah</label>
                <input type="hidden" name="id_sejarah" value="<?php echo $_GET['id_sejarah'] ?>">
                <textarea name="isi" id="" cols="50" rows="5" class="form-control"><?= $edit['isi']?> </textarea>
                </div>
            
                <div align="right">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
        </form>
    </div>
</div>
