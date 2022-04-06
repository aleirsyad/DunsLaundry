<?php

require_once('config.php');
$id = $_GET['id'];

if (!isset($_POST["submit"])) {
    $query = "SELECT * FROM pembayaran WHERE pembayaran_id= $id";
    $result = $db->query($query);
    if (!$result) {
        die("Could not the query database: <br />" . $db->error);
    } else {
        while ($row = $result->fetchObject()) {
            $status_orderan = $row->status_orderan;
        }
    }
} else {
    $valid = true;
    $status_orderan = $_POST['status_orderan'];
    $query = "UPDATE pembayaran SET status_orderan = $status_orderan WHERE pembayaran_id=$id";
    $result = $db->query($query);
    if (!$result) {
        die("Could not the query database: <br />" . $db->error);
    } else {

        header('Location: index.php');
    }
}
include('header.html');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Edit Status Orderan</div>
            <div class="card-body">
                <form method="POST" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $id; ?>">
                    <label for="status_orderan">Status Orderan : </label>
                    <select name="status_orderan" id="status_orderan">
                        <option value="0">Pembayaran belum diverifikasi</option>
                        <option value="1">Sedang dalam proses</option>
                        <option value="2">Sudah selesai</option>
                        <option value="-1">Bukti pembayaran tidak valid</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                    <a href="index.php" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    <?php
    // $db->close();
    ?>

</body>

</html>