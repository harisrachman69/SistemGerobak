<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?=$title ?></title>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.13/datatables.min.js"></script>
    
    <!-- <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
     --><!-- <title>Hello, world!</title> -->
    
    <style>
    .badge{
      margin-left:3px;
    };
    </style>
  </head>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<div class="container">
  <a class="navbar-brand" href="#">CI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
  <div class="navbar-nav">
    <!-- <a class="nav-item nav-link" href="<?= base_url(); ?>">Home<span class="sr-only"> current </span></a>
    <a class="nav-item nav-link" href="<?= base_url(); ?>mahasiswa">Data Mahasiswa</a> -->
    <!-- <a class="nav-item nav-link" href="<?= base_url(); ?>">About</a> -->
    <a class="nav-item nav-link" href="<?= base_url(); ?>user/laporan_pdf">Cetak Laporan</a>
    <a class="nav-item nav-link" href="<?= base_url(); ?>login/logout">LogOut</a>
  </div>
  </div>
  </div>
</nav>
</html>