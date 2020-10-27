<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card-header">
                    Detail Data Guru
        </div>
            <div class="card-body">
                <center><h5 class="card-title"> 
                    <?= $guru['id_guru']; ?>
                </h5></center>
                <p class="card-text">
                    <label for=""><b> Nama : </b></label>
                    <?= $guru['nama']; ?>
                </p>

                <p class="card-text">
                    <label for=""><b> kelas : </b></label>
                    <?= $guru['kelas']; ?>
                </p>

                <p class="card-text">
                    <label for=""><b> MataPelajaran : </b></label>
                    <?= $guru['MataPelajaran']; ?>
                </p>

                <p class="card-text">
                    <label for=""><b> jenis_kelamin : </b></label>
                    <?= $guru['jenis_kelamin']; ?>
                </p>
                <p class="card-text">
                    <label for=""><b> Alamat : </b></label>
                    <?= $guru['alamat']; ?>
                </p>
                <p class="card-text">
                    <label for=""><b> no_hp : </b></label>
                    <?= $guru['no_hp']; ?>
                </p>

                <a href="<?= base_url(); ?>guru" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>