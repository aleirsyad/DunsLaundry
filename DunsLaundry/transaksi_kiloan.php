<?php
require_once("auth.php");
$id = $_SESSION['user']['id'];
$conn = mysqli_connect("localhost", "root", "", "dunslaundry");

// if ($conn) {
//     echo "Connection Succesfully";
// } else {
//     echo "Can't connect to Database";
// }

$query = "SELECT * FROM pembayaran as p INNER JOIN kiloan as k ON p.kiloan_id=k.kiloan_id WHERE p.customer_id = $id ";
$connect = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Duns Laundry</title>

    <!-- menyisipkan bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="FrontEnd/libraries/css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="FrontEnd/styles/mainProfiles.css" />
    <link rel="stylesheet" href="FrontEnd/styles/main.css" />
</head>

<body>
    <?php require('navbar.php') ?>

    <section>
        <!-- <div class="row"> -->
        <!-- <div class="col-md-12"> -->
        <!-- <img class="img img-responsive" src="img/connect.png" /> -->
        <div class="card">
            <div class="text-center pt-2 mb-5">
                <h2>Daftar Transaksi Laundry Kiloan Duns Laundry</h2>
            </div>
            <!-- <div class="text-center">
            <a class="btn btn-primary" href="ubahstatus.php">Ubah Status</a><br><br>
        </div> -->
        </div>
        </div>
    </section>
    <div id="status">
        <div class="text-right">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Details</th>
                    <th>Waktu Pengambilan</th>
                    <th>Waktu Pengantaran</th>
                    <th>bukti_pembayaran</th>
                    <th>Status Pembayaran</th>
                    <th>Status Orderan</th>
                    <th>Alamat</th>
                </tr>
                <?php
                while ($data = $connect->fetch_object()) {
                    echo '<tr>';
                    echo '<th>' . $data->pembayaran_id . '</th>';
                    $bb = $data->bobot;
                    // echo '<th>';
                    if (!$bb) {
                        echo '<th> Layanan = ' . $data->layanan . '<br> Bobot : Laundry anda sedang ditimbang </th>';
                        // echo '<th> Laundry anda sedang ditimbang </th>';
                    } else {
                        echo '<th> Layanan = ' . $data->layanan . '<br> Bobot : ' . $bb . '</th>';
                        // echo 'Layanan = ' . $bb . ' </th>';
                    }
                    echo '</th>';
                    echo '<th> Tanggal : ' . $data->tgl_pengambilan . '<br> Pukul : ' . $data->waktu_pengambilan . '</th>';
                    echo '<th> Tanggal : ' . $data->tgl_pengantaran . '<br> Pukul : ' . $data->waktu_pengantaran . '</th>';
                    $image = $data->bukti_pembayaran;
                    echo '<th>' . '<img src="data:image/jpg;charset=utf8;base64,' . base64_encode($image) . '" width="100">' . '</th>';

                    $st_pemb = $data->status_pembayaran;
                    if ($st_pemb == 0) {
                        echo '<th class="table-warning"> Pembayaran belum diverifikasi </th>';
                    } else if ($st_pemb == 1) {
                        echo '<th class="table-success"> Pembayaran sudah diverifikasi </th>';
                    } else echo '<th class="table-danger"> Bukti Pembayaran tidak valid </th>';
                    $st_ord = $data->status_orderan;
                    if (!$st_ord) {
                        echo '<th class="table-warning"> Pembayaran belum diverifikasi </th>';
                    } else if ($st_ord == 1) {
                        echo '<th class="table-warning"> Sedang dalam proses laundry </th>';
                    } else if ($st_ord == 2) {
                        echo '<th class="table-success"> Laundry sudah selesai </th>';
                    } else echo '<th class="table-danger"> Bukti Pembayaran tidak valid </th>';
                    echo '<th width="10"> Lokasi : ' . $data->lokasi . '<br> Rincian : ' . $data->rincian_lokasi . '</th>';
                }
                ?>
            </table>
        </div>
    </div>

    <?php require('footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="FrontEnd/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="Frontend/libraries/js/bootstrap.js"></script>
    <script src="FrontEnd/libraries/retina js/retina.min.js"></script>
</body>

</html>