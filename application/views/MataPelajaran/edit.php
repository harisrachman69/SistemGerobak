<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data MataPelajaran
                </div>

                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors() ?></div>
                    <?php endif ?>

                    <form action="" method="post">
                        <input type="hidden" name="Kode_Mapel" value="<?= $matapelajaran['Kode_Mapel']; ?>">

                        <div class="form-group">
                            <label for="nama"> Nama </label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $matapelajaran['nama']; ?>">
                            <?= form_error('Kode_Mapel'); ?>
                        </div>

                        <div class="form-group">
                            <label for="kelas">kelas  </label>
                            <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $matapelajaran['kelas']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="Mapel">MataPelajaran</label>
                            <input type="text" class="form-control" id="MaPel" name="Mapel" value="<?= $matapelajaran['Mapel']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="Id_Guru">id_guru  </label>
                            <input type="text" class="form-control" id="Id_Guru" name="Id_Guru" value="<?= $matapelajaran['Id_Guru']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="KKM"> KKM </label>
                            <input type="text" class="form-control" id="KKM" name="KKM" value="<?= $matapelajaran['KKM']; ?>">
                            <?= form_error('Kode_Mapel'); ?>
                        </div>
                       

                        

                        <button type="submit" name="edit" class="btn btn-primary float-right"> Ok </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>