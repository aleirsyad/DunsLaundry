<?php
require_once("auth.php");

$conn = mysqli_connect("localhost", "root", "", "dunslaundry");

// if ($conn) {
//     echo "Connection Succesfully";
// } else {
//     echo "Can't connect to Database";
// }

$query = "SELECT * FROM pembayaran LEFT JOIN user ON pembayaran.customer_id=user.id";
$connect = mysqli_query($conn, $query);
// $num = mysqli_num_rows($connect);

// $sqlimage  = "SELECT image FROM pembayaran where `id` = $id1";
// $imageresult1 = mysqli_query($conn, $sqlimage);
?>

<!DOCTYPE html>
<html lang="en">

<?php
// session_start();
include('header.php');
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Duns Laundry</title>

    <!-- menyisipkan bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<section>
    <!-- <div class="row"> -->
    <!-- <div class="col-md-12"> -->
    <!-- <img class="img img-responsive" src="img/connect.png" /> -->
    <div class="card">
        <div class="text-center pt-2 mb-5">
            <h2>Data Pembayaran Duns Laundry</h2>
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
                <th>ID Pembayaran</th>
                <th>Layanan</th>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Bukti Pembayaran</th>
                <th>Status Pembayaran</th>
                <th>Status Orderan</th>
                <th>Action</th>
                <th>Bobot</th>
            </tr>
            <?php
            while ($data = $connect->fetch_object()) {
                echo '<tr>';
                echo '<th>' . $data->pembayaran_id . '</th>';
                if (($data->shoescare_id) != "") {
                    echo '<th>Shoescare</th>';
                } elseif (($data->kiloan_id) != "") {
                    echo '<th>Kiloan</th>';
                } elseif (($data->satuan_id) != "") {
                    echo '<th>Satuan</th>';
                }
                echo '<th>' . $data->customer_id . '</th>';
                echo '<th>' . $data->name . '</th>';
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
                echo '<th>
                    <a class="btn btn-info btn-sm" href="edit_status.php?id=' . $data->pembayaran_id . '">Edit Pembayaran</a><br>
                    <a class="btn btn-danger btn-sm" href="edit_orderan.php?id=' . $data->pembayaran_id . '">Edit Orderan</a>
                    </th>';

                $bobot = $data->kiloan_id;
                if ($bobot != "") {
                    $query = "SELECT * FROM kiloan WHERE kiloan_id=$bobot";
                    $conn1 = mysqli_query($conn, $query);
                    $result = $conn1->fetch_object();
                    echo '<th>' . $result->bobot . '<br> 
                    <a class="btn btn-danger btn-sm" href="edit_bobot.php?id=' . $bobot . '">Edit Bobot</a></th>';
                } else echo '<th> - </th>';
                echo '</tr>';
            }


            ?>
        </table>
    </div>
</div>

</html>