<div class="card">
    <div class="card-header">
        <a href="?page=guru/tambah" class="btn btn-info">Daftar</a>
    </div>
    <div class="card-body">
    
    <table class="table table-striped">
    <thead>
      <tr class="table-primary">
        <th>ID</th>
        <th>Nama</th>
        <th>Status</th>
        <!-- <th>Kode Guru</th>
        <th>Alamat</th> -->
        <th>Jenis Kelamin</th>
        <th>Foto</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $data = $koneksi->query("SELECT * FROM `guru`");
        foreach($data as $i =>$isi){
      ?>
        <tr>
          <td><?= $i+1 ?></td>
          <td><?= $isi['nama'] ?></td>
          <td><?= $isi['mapel'] ?></td>
          <!-- <td><?= $isi['kode'] ?></td>
          <td><?= $isi['alamat'] ?></td> -->
          <td><?= $isi['jenis_kelamin'] ?></td>
          <td><img src="dokumentasi/guru/<?= $isi['gambar'] ?>" width="100" alt=""></td>
          <td>
            <a href="?page=guru/edit&id_guru=<?= $isi['id_guru']?>" class="btn btn-warning"><i class="fa solid fa-pen"></i></a>
            <a href="?page=guru/hapus&id_guru=<?= $isi['id_guru']?>" class="btn btn-danger"><i class="fa solid fa-trash"></i></a>
        </tr>
      <?php }?>
    </tbody>
  </table>
    </div>
</div>