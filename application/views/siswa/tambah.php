<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Siswa
                </div>

                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors() ?></div>
                    <?php endif ?>
                    <form action="" method="post">  
                        <div class="form-group">
                            <label for="NIS"> NIS </label>
                            <input type="text" class="form-control" id="NIS" name="NIS">
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
                            <label for="jenis_kelamin"> Jenis Kelamin </label>
                            <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        </div>
                        <div class="form-group">
                            <label for="nama"> No Hp </label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp">
                        </div>

                        <div class="form-group">
                            <label for="alamat"> Alamat </label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                      

                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>