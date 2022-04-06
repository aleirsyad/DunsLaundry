<?php require_once("auth.php"); ?>

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
    <link rel="stylesheet" href="FrontEnd/styles/mainlocation.css">
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

    <!-- header -->
    <header class="background-header">
    </header>

    <!-- Main -->
    <main>
        <section class="section-alamat " id="ProfileUser">
            <div class="container">
                <div class="header-alamat text-center">
                    <h1>Tentukan Alamat</h1>
                </div>
                <div class="input-alamat">
                    <div class="part-alamat mb-4">
                        <label for="LokasiAnda" class="form-label">Lokasi Anda</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class=" part-alamat-rincian">
                        <label for="AlamatRincian" class="form-label">Rincian Alamat</label>
                        <textarea class="form-control" placeholder="contoh: rumah warna putih, gerbang hitam depan mushola, dll." id="floatingTextarea2"></textarea>
                    </div>
                </div>
                <div class="tombol-selanjutnya">
                    <button type="button" class="btn btn-selanjutnya">Selanjutnya</button>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="Footer-menu mt-5 border-top" id="Section-footer">
        <div class="container">
            <div class="footers pt-4 pb-4 pt-lg-5 pb-lg-5">
                <div class="head header-footer">
                    <p>Get in touch</p>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 pt-3">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4 mb-3">
                                <h4 class="mb-1">Store & Office</h4>
                                <ul class="list-unstyled footer-link-list storeandoffice text-white">
                                    <li class="title">address</li>
                                    <li>Jl. Tembalang, No. X, Tembalang, Semarang, Jawa Tengah, Indonesia 40xxx</li>
                                </ul>
                                <ul class="list-unstyled footer-link-list text-white">
                                    <li class="title">Office Hour</li>
                                    <li>Monday - Sunday</li>
                                    <li>08.00 - 21.00</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6 col-lg-5 mb-3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled footer-link-list text-info-number text-white">
                                            <li>Phone</li>
                                            <li>Service Center</li>
                                            <li>Customer Service</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="list-unstyled footer-link-list info-number text-white">
                                            <li>0878-xxxx-xxxx</li>
                                            <li>0878-xxxx-xxxx</li>
                                            <li>0878-xxxx-xxxx</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-3 mb-2 get-connected">
                                <h4 class="mb-3">Information</h4>
                                <ul class="list-unstyled footer-link-list link-menu">
                                    <li><a href="">About Us</a></li>
                                    <li><a href="">Contact</a></li>
                                    <li><a href="">Log In</a></li>
                                    <li><a href="">Sign Up</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="w-100 pb-3 Copyright" id="footer-copyright">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-center my-1">Copyright &copy; 2021 | PT. Inde Multi Solution</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="FrontEnd/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="Frontend/libraries/js/bootstrap.js"></script>
    <script src="FrontEnd/libraries/retina js/retina.min.js"></script>
</body>

</html>