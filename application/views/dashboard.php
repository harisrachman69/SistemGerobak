<div class="container-fluid">
    <!-- SLIDE -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('assets/img/slide7.jpg')?>" class="d-block w-100" alt="...">

    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slide8.jpg')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('assets/img/slide6.jpg')?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<h1 style="text-align:center;">Contact Us</h1>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="row text-center mt-2  ">
<header>
    <nav>
      <ul>
        <a href="#"><i class="fa fa-facebook"></i>&nbsp;&nbsp;: @gerobakonline</a> </li>

        <a href="#"><i class="fa fa-instagram"></i>&nbsp;&nbsp;: @gerobakonline</a> </li>

        <a href="#"><i class="fa fa-twitter"></i>&nbsp;&nbsp; : @gerobakonline</a></li>
        
        <a href="#"><i class="fa fa-google"></i>&nbsp;&nbsp;: gerobak999@gmail.com</a></li>
       
      </ul>
    </nav>
  </div>
</header>

<h1 style="text-align:center;">About Us</h1>
<tr> asdasdasdas 
  <th> asasdasdjsaldjlasijdliasjdilasjldijaslidjlsaijdliasjdlijas diljsalidj asildj aslidj asildjalidj ilaj dasdsadsa </th>
  <th> asdasdsadsa </th>
  <th> asdasdsadsa </th>
  <th> asdasdsadsa </th>
   </tr>

    <!-- <div class="row text-center mt-4">
    <?php foreach ($barang as $brg) : ?>
        <div class="card ml-3 mb-3" style="width: 16rem;">
        <img src="<?php echo base_url().'/upload/'.$brg->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
        <small><?php echo $brg->keterangan ?></small><br>
        <span class="badge badge-success mb-3">Rp. <?php echo number_format($brg->harga, 0, ',','.') ?></span>
        <?php echo anchor('dashboard/tambah_ke_keranjang/' .$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
        <?php echo anchor('dashboard/detail/' .$brg->id_brg,'<div class="btn btn-sm btn-success">Detail</div>') ?>
        </div>
        </div>
    <?php endforeach ?>
    </div>
</div> -->