<!-- <?php var_dump($matapelajaran); ?> -->

<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    MataPelajaran <strong> Berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <h2>Daftar MataPelajaran</h2>

                    <?php if (empty($matapelajaran)) : ?>
                        <div class="alert alert-danger" role="alert">
                            Data MataPelajaran Tidak Ditemukan.
                        </div>
                    <?php endif; ?>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <form action=" " method="post">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Masukkan Data" name="keyword" value="<?= set_value("keyword") ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-success" type="submit"><b> Cari </b></button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="list-group">
                        <table class="table table-striped table-light">
                            <thead>
                                <tr>
                                    <th scope="col"> Kode_Mapel </th>
                                    <th scope="col"> Mapel </th>
                                    <th scope="col"> KKM </th>
                                    <th scope="col"> Id_Guru </th>
                                    <th scope="col"> nama </th>
                                    <th scope="col"> kelas </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($matapelajaran as $mp) { ?>
                                    <tr>
                                        <td><?php echo $mp['Kode_Mapel'] ?></td>
                                        <td><?php echo $mp['Mapel'] ?></td>
                                        <td><?php echo $mp['KKM'] ?></td>
                                        <td><?php echo $mp['Id_Guru'] ?></td>
                                        <td><?php echo $mp['nama'] ?></td>
                                        <td><?php echo $mp['kelas'] ?></td>
                                      

                                        <td>
                                        <a href="<?= base_url(); ?>matapelajaran/hapus/<?= $mp['Kode_Mapel']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah Anda Ingin menghapus Mapel Ini?');">Hapus</a>
                                        <a href="<?= base_url(); ?>matapelajaran/edit/<?= $mp['Kode_Mapel']; ?>" class="badge badge-success float-right">Edit</a>
                                        <a href="<?= base_url(); ?>matapelajaran/detail/<?= $mp['Kode_Mapel']; ?>" class="badge badge-primary float-right">Detail</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </ul>
                    <br>
                    <a href="<?= base_url(); ?>matapelajaran/tambah" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
</div>