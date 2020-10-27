<!-- <?php var_dump($siswa); ?> -->

<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Data Siswa<strong> Berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
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
                    <h2>Daftar Siswa</h2>

                    <?php if (empty($siswa)) : ?>
                        <div class="alert alert-danger" role="alert">
                            Data Siswa Tidak Ditemukan.
                        </div>
                    <?php endif; ?>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <form action=" " method="post">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <button class="btn btn-primary" type="submit"><b> Cari </b></button>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Masukkan Data" name="keyword" value="<?= set_value("keyword") ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <ul class="list-group">
                        <table class="table table-striped table-light">
                            <thead>
                                <tr>
                                    <th scope="col"> NIS </th>
                                    <th scope="col"> Nama </th>
                                    <th scope="col"> Kelas </th>
                                    <th scope="col"> Jenis Kelamin </th>
                                    <th scope="col"> No Hp </th>
                                    <th scope="col"> Alamat </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($siswa as $si) { ?>
                                    <tr>
                                        <td><?php echo $si['NIS'] ?></td>
                                        <td><?php echo $si['nama'] ?></td>
                                        <td><?php echo $si['kelas'] ?></td>
                                        <td><?php echo $si['jenis_kelamin'] ?></td>
                                        <td><?php echo $si['no_hp'] ?></td>
                                        <td><?php echo $si['alamat'] ?></td>
                                        

                                        <td>
                                            <a href="<?= base_url(); ?>siswa/hapus/<?= $si['NIS']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>

                                            <a href="<?= base_url(); ?>siswa/edit/<?= $si['NIS']; ?>" class="badge badge-success float-right">Edit</a>

                                            <a href="<?= base_url(); ?>siswa/detail/<?= $si['NIS']; ?>" class="badge badge-primary float-right">Detail</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </ul>
                    <br>
                    <a href="<?= base_url(); ?>siswa/tambah" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
</div>