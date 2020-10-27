<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card-header">
                    Detail Data Siswa
        </div>
        <div class="card-body">
                <center><h5 class="card-title"> 
                    <?= $siswa['NIS']; ?>
                </h5></center>
            <div class="card-body">
                <center><h5 class="card-title"> 
                    <?= $siswa['nama']; ?>
                </h5></center>
                <p class="card-text">
                    <label for=""><b> Jenis Kelamin : </b></label>
                    <?= $siswa['jenis_kelamin']; ?>
                </p>

                <p class="card-text">
                    <label for=""><b> No Hp : </b></label>
                    <?= $siswa['no_hp']; ?>
                </p>
                <p class="card-text">
                    <label for=""><b> Alamat : </b></label>
                    <?= $siswa['alamat']; ?>
                </p>
                <p class="card-text">
                    <label for=""><b> Kelas: </b></label>
                    <?= $siswa['kelas']; ?>
                </p>

                <a href="<?= base_url(); ?>siswa" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>