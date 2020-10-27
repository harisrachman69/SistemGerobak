<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Guru
                </div>

                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors() ?></div>
                    <?php endif ?>

                    <form action="" method="post">
                        <input type="hidden" name="id_guru" value="<?= $guru['id_guru']; ?>">

                        <div class="form-group">
                            <label for="nama"> Nama </label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $guru['nama']; ?>">
                            <?= form_error('id_guru'); ?>
                        </div>

                        <div class="form-group">
                            <label for="kelas">kelas  </label>
                            <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $guru['kelas']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="MataPelajaran">MataPelajaran  </label>
                            <input type="text" class="form-control" id="MataPelajaran" name="MataPelajaran" value="<?= $guru['MataPelajaran']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">jenis_kelamin  </label>
                            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $guru['jenis_kelamin']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="no_hp"> NoHp </label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $guru['no_hp']; ?>">
                            <?= form_error('id_guru'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat  </label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $guru['alamat']; ?>">
                        </div>

                        

                        <button type="submit" name="edit" class="btn btn-primary float-right"> Ok </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>