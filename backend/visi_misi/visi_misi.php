<div class="card">
  <div class="card-header">
    <a href="?page=visi_misi/tambah" class="btn btn-info"> Tambah Data</a>
  </div>
  <div class="card-body">
    <table class="table table-striped">
      <thead>
        <tr class="table-primary">
          <th>Nomor</th>
          <th>VISI</th>
          <th>MISI</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $data = $koneksi->query("SELECT * FROM `visi_misi`");
        foreach($data as $i =>$isi){
      ?>
        <tr>
           <td><?= $i+1 ?></td>
          <td><?= $isi['visi'] ?></td>
          <td><?= $isi['misi'] ?></td>
          <td>
            <a href="?page=visi_misi/edit&id_vm=<?= $isi['id_vm']?>" class="btn btn-warning"><i class="fa solid fa-pen"></i></a>
            <a href="?page=visi_misi/hapus&id_vm=<?= $isi['id_vm']?>" class="btn btn-danger"><i class="fa solid fa-trash"></i></a>
        </td>
          </tr>
        <?php }?>
      </tbody>
    </table>
  </div>
</div>