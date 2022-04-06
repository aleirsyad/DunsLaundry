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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="FrontEnd/libraries/css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="FrontEnd/styles/mainProfiles.css" />
    <link rel="stylesheet" href="FrontEnd/styles/main.css" />
    <script>
      $(function() {
      $(".toggle").on("click", function() {
          if ($(".item").hasClass("active")) {
              $(".item").removeClass("active");
          } else {
              $(".item").addClass("active");
          }
      });
  });
      </script>
  </head>
  <body>
    <!-- Navbar -->
    <?php require('navbar.php')?> 
  
    <!-- Header -->
    <!-- <header>
      <div class="container Profile-title pt-lg-4">
        <p>About Us</p>
      </div>
    </header> -->

    <!-- Main -->
    <main>
      <section>
      <div class="container Profile-title pt-lg-4">
        <p style="font-weight: 600; font-size:42px; padding-top: 20px;"> About Us</h2></p>
      </div>
      </section>
      <!-- Section Kita Adalah -->
      <section class="section-Kita-Adalah" id="Tentang kami">
        <div class="container">
          <div class="row justify-content-center Kita-Adalah-space">
            <div class="col text-center"> 
              <img class="Picture-Kita-Adalah" src="FrontEnd/images/Rectangle 102.png" alt="ProfilIndeMultiSolution">
            </div>
            <div class="col text-Kita-Adalah text-align-left">
              <h3>Kita Adalah</h3>
              <p>Duns Laundry merupakan salah satu laundry di Semarang yang 
                berdiri sejak Agustus 2021. Duns Laundry menawarkan berbagai
                pilihan laundry dan shoescare dengan kualitas terbaik. 
                Kami juga menawarkan pemesanan berbasis website yang bisa 
                diakses langsung melalui website kami. Jadi anda tidak perlu 
                repot-repot datang langsung ke laundry kami untuk memesan jasa 
                layanan kami. Cucian anda akan kami ambil di tempat anda, dan 
                akan diproses sesuai keinginan anda. Your Satisfaction is Our Priority.  </p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <?php require('footer.php')?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="FrontEnd/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="Frontend/libraries/js/bootstrap.js"></script>
    <script src="FrontEnd/libraries/retina js/retina.min.js"></script>
  </body>
</html>
