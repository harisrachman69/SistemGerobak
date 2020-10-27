<!-- <?php var_dump($guru); ?> -->

<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Data Guru <strong> Berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
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
                    <h2>Daftar Guru</h2>

                    <?php if (empty($guru)) : ?>
                        <div class="alert alert-danger" role="alert">
                            Data Guru   Tidak Ditemukan.
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
                                                <button class="btn btn-primary" type="submit"><b> Cari </b></button>
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
                                    <th scope="col"> IDGuru </th>
                                    <th scope="col"> Nama </th>
                                    <th scope="col"> Kelas </th>
                                    <th scope="col"> MataPelajaran </th>
                                    <th scope="col"> JenisKelamin </th>
                                    <th scope="col"> Alamat </th>
                                    <th scope="col"> NOHP </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($guru as $gu) { ?>
                                    <tr>
                                        <td><?php echo $gu['id_guru'] ?></td>
                                        <td><?php echo $gu['nama'] ?></td>
                                        <td><?php echo $gu['kelas'] ?></td>
                                        <td><?php echo $gu['MataPelajaran'] ?></td>
                                        <td><?php echo $gu['jenis_kelamin'] ?></td>
                                        <td><?php echo $gu['alamat'] ?></td>
                                        <td><?php echo $gu['no_hp'] ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>guru/hapus/<?= $gu['id_guru']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>

                                            <a href="<?= base_url(); ?>guru/edit/<?= $gu['id_guru']; ?>" class="badge badge-success float-right">Edit</a>

                                            <a href="<?= base_url(); ?>guru/detail/<?= $gu['id_guru']; ?>" class="badge badge-primary float-right">Detail</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </ul>
                    <br>
                    <a href="<?= base_url(); ?>guru/tambah" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
</div>