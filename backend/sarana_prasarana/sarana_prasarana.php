<div class="card">
    <div class="card-header">
        <a href="?page=sarana_prasarana/tambah" class="btn btn-info">Tambah Data</a>
    </div>
    <div class="card-body">
    
    <table class="table table-striped">
    <thead>
      <tr class="table-primary">
        <th>NOMOR</th>
        <th>NAMA</th>
        <th>GAMBAR</th>
        <th>DESKRIPSI</th> 
        <th>AKSI</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $data = $koneksi->query("SELECT * FROM `sarana_prasarana`");
        foreach($data as $i =>$isi){
      ?>
        <tr>
          <td><?= $i+1 ?></td>
          <td><?= $isi['nama'] ?></td>
          <td><img src="foto/<?= $isi['foto'] ?>" width="100" alt=""></td>
          <td><?= $isi['deskripsi'] ?></td> 
          <td>
            <a href="?page=sarana_prasarana/edit&id_sp=<?= $isi['id_sp']?>" class="btn btn-warning"><i class="fa solid fa-pen"></i></a>
        
            <a href="?page=sarana_prasarana/hapus&id_sp=<?= $isi['id_sp']?>" class="btn btn-danger"><i class="fa solid fa-trash"></i></a>
          </td>
        </tr>
      <?php }?>
    </tbody>
  </table>
    </div>
</div>