<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request('GET','http://localhost/uas_rest_apike2/api/gamingsetup',[
  'auth' => ['admin','1234'],
  'query' => [
    'keytokengaming' => 'gaming123'
  ]
]);
$result = json_decode($response->getBody()->getContents(),true) ;
?>

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title> <?= $judul ?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"> <img src="https://images.unsplash.com/photo-1522139137660-4248e04955b8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1355&q=80" width="120" </img>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link " href="<?= base_url() ?>adminpage">Admin Page </a>
            <a class="nav-link " href="<?= base_url()  ?>">Room Decoration </a>
            <a class="nav-link active" href="#">PC Gaming Setup <span class="sr-only">(current)</span></a>

          </div>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row mt-3">
        <div class="col">
          <h1>All Gaming Hardware</h1>
        </div>
      </div>
      <div class="row">
        <?php foreach ($result['data'] as $dekor): ?>
        <div class="col-md-4">
            <div class="card mb-4">
                <h5 class="card-header "><?= $dekor["kategori"]; ?></h5>
            <img src=" <?= $dekor["gambar"]?>" class="img-thumbnail" height="200px" >
            <div class="card-body">
              <h5 class="card-title"><?= $dekor["nama"]; ?></h5>
              <p class="card-text"> Harga </p>
              <h5 class="card-title"> Rp. <?= $dekor["harga"]; ?></h5>
              <a href="#" class="btn btn-primary">Pesan Sekarang</a>
            </div>
            </div>
        </div>
      <?php endforeach; ?>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
