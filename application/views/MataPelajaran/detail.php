<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card-header">
                    Detail Data Mata Pelajaran
        </div>
            <div class="card-body">
                <center><h5 class="card-title"> 
                    <?= $matapelajaran['Kode_Mapel']; ?>
                </h5></center>
                <p class="card-text">
                    <label for=""><b> Mapel : </b></label>
                    <?= $matapelajaran['Mapel']; ?>
                </p>

                <p class="card-text">
                    <label for=""><b> KKM : </b></label>
                    <?= $matapelajaran['KKM']; ?>
                </p>
                <p class="card-text">
                    <label for=""><b> IDGuru : </b></label>
                    <?= $matapelajaran['Id_Guru']; ?>
                </p>
                <p class="card-text">
                    <label for=""><b> Nama : </b></label>
                    <?= $matapelajaran['nama']; ?>
                </p>
                <p class="card-text">
                    <label for=""><b> Kelas : </b></label>
                    <?= $matapelajaran['kelas']; ?>
                </p>
               

                <a href="<?= base_url(); ?>matapelajaran" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>