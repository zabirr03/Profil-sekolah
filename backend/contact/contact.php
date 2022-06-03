<div class="card">
    <div class="card-header">
        <a href="?page=contact/tambah" class="btn btn-success">Masukkan Contact</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr class="table-primary">
                    <th>Nomor</th>
                    <th>Nomor Telpon</th>
                    <th>Email</th>
                    <th>Instagram</th>
                    <th>Facebook</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
            $data = $koneksi->query("SELECT * FROM `kontak`");
            foreach($data as $i =>$isi){
                ?>
                <tr>
                    <td><?= $i+1 ?></td>
                    <td><?= $isi['telpon'] ?></td>
                    <td><?= $isi['email'] ?></td>
                    <td><?= $isi['ig'] ?></td>
                    <td><?= $isi['fb'] ?></td>
                    <td>
                        <a href="?page=contact/edit&id_kontak=<?= $isi['id_kontak']?>" class="btn btn-warning"><i class="fa solid fa-pen"></i></a>
                        <a href="?page=contact/hapus&id_kontak=<?= $isi['id_kontak']?>" class="btn btn-danger"><i class="fa solid fa-trash"></i></a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>