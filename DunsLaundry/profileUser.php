<?php
require_once("auth.php");

$id = $_SESSION['user']['id'];
$conn = mysqli_connect("localhost", "root", "", "dunslaundry");

$query = "SELECT * FROM user WHERE id = $id";
$connect = mysqli_query($conn, $query);
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
    <link rel="stylesheet" href="FrontEnd/styles/mainprofileuser.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="FrontEnd/libraries/css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="FrontEnd/styles/main.css" />
    <link rel="stylesheet" href="FrontEnd/styles/mainprofileuser.css">
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
    <?php require('navbar.php') ?>

    <!-- Main -->
    <main>
        <section class="section-profileuser pt-5" id="ProfileUser">
            <div class="container">
                <div class="profile-user-part">
                    <div class="row profile">
                        <div class="col-md-8 head-profile text-center">
                            <h2>Profile Saya</h2>
                        </div>
                        <div class="col-md-4 image-profile text-center">
                            <img src="FrontEnd/images/User 03C.png" alt="img-profile">
                        </div>
                    </div>
                    <div class="main-profile ">
                        <div class="row text-center">
                            <div class="col-md-6 part-1">
                                <ul class="list-unstyled profile-link-list">
                                    <li>Nama</li>
                                    <li>Tanggal Lahir</li>
                                    <li>Jenis Kelamin</li>
                                    <li>Email</li>
                                    <li>Nomor HP</li>
                                </ul>
                            </div>
                            <div class="col-md-6 part-2">
                                <ul class="list-unstyled profile-link-list">
                                    <?php
                                    $data = $connect->fetch_object();
                                    echo '<li>' . $data->name . '</li>';
                                    if (($data->tgl_lahir) != "" && ($data->tgl_lahir) != "0000-00-00") {
                                        echo '<li>' . $data->tgl_lahir . '</li>';
                                    } else echo '<li> Belum ditentukan </li>';
                                    if (($data->jenis_kelamin) != "") {
                                        echo '<li>' . $data->jenis_kelamin . '</li>';
                                    } else echo '<li> Belum ditentukan </li>';

                                    echo '<li>' . $data->email . '</li>';
                                    echo '<li>' . $data->no_telp . '</li>';
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="button d-flex justify-content-evenly">
                        <div class="button-ubah">
                            <a class="btn btn-ubah text-center" href="edit_profil.php" role="button">Ubah Data</a>
                        </div>
                        <div class="button-daftar">
                            <a class="btn btn-daftar-riwayat text-center" href="daftar_transaksi.php" role="button">Lihat Daftar Riwayat</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?php require('footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="FrontEnd/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="Frontend/libraries/js/bootstrap.js"></script>
    <script src="FrontEnd/libraries/retina js/retina.min.js"></script>
</body>

</html>