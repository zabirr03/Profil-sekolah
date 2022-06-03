<div class="card">
    <div class="card-header">
        <a href="?page=Profil1/tambah" class="btn btn-info">Masukkan Data</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr class="table-primary">
                    <th>Nomor</th>
                    <th>NPSN</th>
                    <th>Status</th>
                    <th>Bentuk Pendidikan</th>
                    <th>Status Kepemilikan</th>
                    <th>SK Pendirian Sekolah</th>
                    <th>Tanggal SK Pendirian</th>
                    <th>SK Izin Operasional</th>
                    <th>Tanggal SK Izin Operasional</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $data = $koneksi->query("SELECT * FROM `tb_profile2`");
                foreach($data as $i =>$isi){
                    ?>
                    <tr>
                        <td><?= $i+1 ?></td>
                        <td><?= $isi['npsn'] ?></td>
                        <td><?= $isi['status'] ?></td>
                        <td><?= $isi['pendidikan'] ?></td>
                        <td><?= $isi['kepemilikan'] ?></td>
                        <td><?= $isi['sk_pendirian'] ?></td>
                        <td><?= $isi['tanggal_sk_pendirian'] ?></td>
                        <td><?= $isi['sk_izin'] ?></td>
                        <td><?= $isi['tanggal_sk_izin'] ?></td>
                        <td>
                            <a href="?page=Profil1/edit&id_pf=<?= $isi['id_pf']?>" class="btn btn-warning"><i class="fa solid fa-pen"></i></a>
                            <a href="?page=Profil1/hapus&id_pf=<?= $isi['id_pf']?>" class="btn btn-danger"><i class="fa solid fa-trash"></i></a>
                    </tr>
                  <?php }?>
            </tbody>
        </table>
    </div>
</div>