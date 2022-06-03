<div class="card">
    <div class="card-header">
        <a href="?page=sejarah/tambah" class="btn btn-info">Sejarah</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr class="table-primary">
                <th>Nomor</th>
              <th> <div align="center">Sejarah</div></th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
           <?php
        $data = $koneksi->query("SELECT * FROM `sejarah`");
        foreach($data as $i =>$isi){
      ?>
                <tr>
                    <td><?= $i+1 ?></td>
                    <td><?= $isi['isi'] ?></td>
                    <td>
                        <a href="?page=sejarah/edit&id_sejarah=<?= $isi['id_sejarah']?>"
                            class="btn btn-warning"><i class="fa solid fa-pen"></i></a>
                        <a href="?page=sejarah/hapus&id_sejarah=<?= $isi['id_sejarah']?>"
                            class="btn btn-danger"><i class="fa solid fa-trash"></i></a>
        </td>
                </tr>
                <?php }?>

            </tbody>
        </table>
    </div>
</div>