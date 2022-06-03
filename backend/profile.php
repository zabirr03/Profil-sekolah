<div class="card">
    <div class="card-header">
       Data
    </div>
    <div class="card-body">
    
    <table class="table table-striped">
    <thead>
      <tr class="table-primary">
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
        $data = $koneksi->query("SELECT * FROM `user`");
        foreach($data as $i =>$isi){
      ?>
        <tr>
          <td><?= $i+1 ?></td>
          <td><?= $isi['username'] ?></td>
          <td><?= $isi['email'] ?></td>
          <td><?= $isi['password'] ?></td>
          <td>
            <a href="?page=user/edit&id=<?= $isi['id']?>" class="btn btn-warning"><i class="fa solid fa-pen"></i></a>
            <a href="?page=user/hapus&id=<?= $isi['id']?>" class="btn btn-danger"><i class="fa solid fa-trash"></i></a>
          </td>
        </tr>
      <?php }?>
    </tbody>
  </table>
    </div>
</div>