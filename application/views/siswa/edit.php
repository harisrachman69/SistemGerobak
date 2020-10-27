<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Siswa
                </div>

                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors() ?></div>
                    <?php endif ?>

                    <form action="" method="post">
                        <input type="hidden" name="NIS" value="<?= $siswa['NIS']; ?>">

                        <div class="form-group">
                            <label for="NIS"> NIS </label>
                            <input type="text" class="form-control" id="NIS" name="NIS" value="<?= $siswa['NIS']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="nama"> Nama </label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $siswa['nama']; ?>">
                            <?= form_error('nama'); ?>
                        </div>

                        <div class="form-group">
                            <label for="kelas"> Kelas </label>
                            <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $siswa['kelas']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="kelas"> Jenis Kelamin </label>
                            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $siswa['jenis_kelamin']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="no_hp"> No Hp </label>
                            <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?= $siswa['no_hp']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="alamat"> Alamat </label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $siswa['alamat']; ?>">
                        </div>
                       

                        <button type="submit" name="edit" class="btn btn-primary float-right"> Ok </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>