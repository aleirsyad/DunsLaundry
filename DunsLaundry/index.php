<?php
session_start();
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <!-- script -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="FrontEnd/libraries/css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="FrontEnd/styles/main.css" />
</head>

<body>
  <!-- Navbar -->
  <?php require('navbar.php')?> 

  <!-- Header -->
  <header class="text-center background-header">
    <h1>
      WELCOME TO
      <br />
      <span class="color-header">duns Laundry</span>
    </h1>
    <p>
      Laundry Cleaning Picked Up &
      <br />
      Delivered to Your Door
    </p>
  </header>

  <!-- Main -->
  <main>
    <!-- Product -->
    <section class="section-product justify-content-center" id="product">
      <div class="container">
        <div class="content-section-heading text-center">
          <h2 class="mb-2 mb-lg-2 title-heading">This is Our Service</h2>
          <p class="text-heading mb-4">
            Choose your laundry service
            <br />
            that you need
          </p>
        </div>
        <div class="row gx-lg-3 media-item">
          <div class="col-sm-6 col-md-6 col-lg-6">
            <a class="portfolio-item item-laundry text-center" href="satuan.php">
              <div class="caption pt-5">
                <div class="caption-content pt-5 text-center">
                  <p>laundry</p>
                </div>
              </div>
              <img class="img" src="FrontEnd/images/Rectangle 6 (1).png" alt="..." />
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-6">
            <a class="portfolio-item item-shoescare text-center" href="shoescare.php">
              <img class="img" src="FrontEnd/images/shoes.png" alt="Solarpanel" />
              <div class="caption pt-5">
                <div class="caption-content pt-5 text-center">
                  <p>Shoescare</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- footer -->
  <?php require('footer.php')?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="FrontEnd/libraries/jquery/jquery-3.6.0.min.js"></script>
  <script src="Frontend/libraries/js/bootstrap.js"></script>
  <script src="FrontEnd/libraries/retina js/retina.min.js"></script>
</body>

</html>