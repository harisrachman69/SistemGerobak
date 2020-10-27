<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mata Pelajaran
                </div>

                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors()?></div>
                    <?php endif ?>
                    <form action="" method="post">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="Kode_Mapel"> Kode_Mapel </label>
                            <input type="text" class="form-control" id="Kode_Mapel" name="Kode_Mapel">
                        </div>

                        <div class="form-group">
                            <label for="nama"> Nama </label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="form-group">
                            <label for="kelas"> Kelas </label>
                            <input type="text" class="form-control" id="kelas" name="kelas">
                        </div>

                        <div class="form-group">
                            <label for="MataPelajaran"> MataPelajaran </label>
                            <input type="text" class="form-control" id="MataPelajaran" name="MataPelajaran">
                        </div>
                        <div class="form-group">
                            <label for="Id_Guru"> Id_Guru </label>
                            <input type="text" class="form-control" id="Id_Guru" name="Id_Guru">
                        </div>

                        <div class="form-group">
                            <label for="KKM"> KKM </label>
                            <input type="text" class="form-control" id="KKM" name="KKM">
                        </div>

                        
                      

                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>