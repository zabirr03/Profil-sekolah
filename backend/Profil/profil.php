<div class="card">
    <div class="card-header">
        <a href="?page=Profil/tambah" class="btn btn-info">Buat Profil</a>
    </div>
    <div class="card-body">
    
    <table class="table table-striped">
    <thead>
      <tr class="table-primary">
        <th>ID</th>
        <th>Judul</th>
        <th>Gambar</th>
        <!-- <th>NPSN</th> -->
        <th>Alamat</th>
        <th>Akreditas</th>
        <th>Isi</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $data = $koneksi->query("SELECT * FROM `tb_profile1`");
        foreach($data as $i =>$isi){
      ?>
        <tr>
          <td><?= $i+1 ?></td>
          <td><?= $isi['judul'] ?></td>
          <td><img src="dokumentasi/foto/<?= $isi['gambar'] ?>" width="100" alt=""></td>
         <!-- <td><?= $isi['npsn'] ?></td> -->
          <td><?= $isi['alamat'] ?></td>
          <td><?= $isi['akreditas'] ?></td>
          <td><?= $isi['isi'] ?></td>
          <td>
            <a href="?page=Profil/edit&id_profil=<?= $isi['id_profil']?>" class="btn btn-warning"><i class="fa solid fa-pen"></i></a>
            <a href="?page=Profil/hapus&id_profil=<?= $isi['id_profil']?>" class="btn btn-danger"><i class="fa solid fa-trash"></i></a>
          </td>
        </tr>
      <?php }?>
    </tbody>
  </table>
    </div>
</div>