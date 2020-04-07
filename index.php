<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Bürkit</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scaleable=no">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" id="navbar">
    <div class="container">
      <a href="/Quadcopter/index.php" class="navbar-brand" id="text">Bürkit</a>
      <ul class="nav navbar-nav">
<!-- Açılmalı Menü-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="text">Ürünler<span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">Quadcopter</a></li>
          <li><a href="#">Drone</a></li>
        </ul>
      </li>
      </ul>
    </div>
  </nav>
<!-- Arka Plan resmi -->
  <div id="background-image"></div>

<!-- Boşlukları kaldırma ve ürünleri ortaya alma -->
<div class="col-md-2"></div>

<!-- Özel Ürünler contenti -->
  <div class="col-md-8">
    <div class="row">
      <h2 class="text-center">Özel ürünler</h2>
      <div class="col-md-4">
        <h4>SNAPTAIN S5C</h4>
        <img src="images/Quadcopter1.png" alt="Quadcopter" id="images">
        <p class="list-price text-danger">Normal Fiyatı: <s>949.99TL</s></p>
        <p class="price">Bizdeki Fiyatı: 849.99TL</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Detaylar</button>
      </div>

      <div class="col-md-4">
        <h4>Aden A55</h4>
        <img src="images/quadcopter2.png" alt="Quadcopter" id="images">
        <p class="list-price text-danger">Normal Fiyatı: <s>800.99TL</s></p>
        <p class="price">Bizdeki Fiyatı: 649.99TL</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Detaylar</button>
      </div>

      <div class="col-md-4">
        <h4>SIMREX X300C</h4>
        <img src="images/quadcopter3.png" alt="Quadcopter" id="images">
        <p class="list-price text-danger">Normal Fiyatı: <s>600.99TL</s></p>
        <p class="price">Bizdeki Fiyatı: 399.99TL</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Detaylar</button>
      </div>

      <div class="col-md-4">
        <h4>Holy Stone HS210</h4>
        <img src="images/quadcopter4.png" alt="Quadcopter" id="images">
        <p class="list-price text-danger">Normal Fiyatı: <s>549.99TL</s></p>
        <p class="price">Bizdeki Fiyatı: 349.99TL</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Detaylar</button>
      </div>

      <div class="col-md-4">
        <h4>EACHINE E61HW</h4>
        <img src="images/quadcopter5.png" alt="Quadcopter" id="images">
        <p class="list-price text-danger">Normal Fiyatı: <s>549.99TL</s></p>
        <p class="price">Bizdeki Fiyatı: 399.99TL</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Detaylar</button>
      </div>

      <div class="col-md-4">
        <h4>Holy Stone HS170 Predator</h4>
        <img src="images/quadcopter6.png" alt="Quadcopter" id="images">
        <p class="list-price text-danger">Normal Fiyatı: <s>1000.99TL</s></p>
        <p class="price">Bizdeki Fiyatı: 549.99TL</p>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Detaylar</button>
      </div>
    </div>
  </div>

<!-- Model detayları -->
<?php include 'details-modal-Quadcopter1.php';
      include 'details-modal-Quadcopter2.php';
      include 'details-modal-Quadcopter3.php';
      include 'details-modal-Quadcopter4.php';
      include 'details-modal-Quadcopter5.php';
      include 'details-modal-Quadcopter6.php';?>


</body>
</html>
