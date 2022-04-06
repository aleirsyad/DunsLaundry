<?php

require_once("auth.php");
require_once("config.php");

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$JenisErr = $PengambilanErr = $PengantaranErr = $TimePengambilanErr = $TimePengantaranErr = "";
$barang_satuan1 = $barang_satuan2 = $barang_satuan3 = $barang_satuan4 = $barang_satuan5 = $barang_satuan6 = $barang_satuan7 = "";

if (isset($_POST['satuan'])) {
    $validation_check = true;
    // if (!(isset($_POST['barang_satuan1']) or isset($_POST['barang_satuan2']) or isset($_POST['barang_satuan3']) or
    //     isset($_POST['barang_satuan4']) or isset($_POST['barang_satuan5']) or isset($_POST['barang_satuan6']) or
    //     isset($_POST['barang_satuan7']))) {
    //     $JenisErr = "Masukan Barang yang ingin dilaundry!";
    //     $validation_check = false;
    // }

    // if (empty($_POST['pengambilan'])) {
    //     $PengambilanErr = "Masukan Tanggal Pengambilan";
    //     $validation_check = false;
    // } else {
    //     $PengambilanErr = "";
    // }

    // if (empty($_POST['pengantaran'])) {
    //     $PengantaranErr = "Masukan Tanggal Pengantaran";
    //     $validation_check = false;
    // } else {
    //     $PengantaranErr = "";
    // }

    // if ($_POST['timepengambilan'] == "none") {
    //     $TimePengambilanErr = "Masukan Waktu Pengambilan";
    //     $validation_check = false;
    // } else {
    //     $TimePengambilanErr = "";
    // }

    // if ($_POST['timepengantaran'] == "none") {
    //     $TimePengantaranErr = "Masukan Waktu Pengantaran";
    //     $validation_check = false;
    // } else {
    //     $TimePengantaranErr = "";
    // }

    if ($validation_check) {
        $input1 = '0';
        $input2 = '0';
        $input3 = '0';
        $input4 = '0';
        $input5 = '0';
        $input6 = '0';
        $input7 = '0';

        if (isset($_POST['barang_satuan1'])) {
            $input1 = $_POST["input1"];
        }
        if (isset($_POST['barang_satuan2'])) {
            $input2 = $_POST["input2"];
        }
        if (isset($_POST['barang_satuan3'])) {
            $input3 = $_POST["input3"];
        }
        if (isset($_POST['barang_satuan4'])) {
            $input4 = $_POST["input4"];
        }
        if (isset($_POST['barang_satuan5'])) {
            $input5 = $_POST["input5"];
        }
        if (isset($_POST['barang_satuan6'])) {
            $input6 = $_POST["input6"];
        }
        if (isset($_POST['barang_satuan7'])) {
            $input7 = $_POST["input7"];
        }


        $pengambilan = $_POST['pengambilan'];
        $pengantaran = $_POST['pengantaran'];
        $timepengambilan = $_POST['timepengambilan'];
        $timepengantaran = $_POST['timepengantaran'];
        $lokasi = $_POST['lokasi'];
        $rincian_lokasi = $_POST['rincian_lokasi'];
        $customer_id = $_SESSION['user']['id'];
        // filter data yang diinputkan
        // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        // $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        // $no_telp = filter_input(INPUT_POST, 'no_telp', FILTER_SANITIZE_STRING);
        // // enkripsi password
        // $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        // $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


        // menyiapkan query
        $sql = "INSERT INTO satuan (celana, jas, bed_cover, karpet, gordyn, boneka, tas, tgl_pengambilan, waktu_pengambilan, tgl_pengantaran, waktu_pengantaran, lokasi, rincian_lokasi, customer_id)  
                    VALUES (:input1, :input2, :input3, :input4, :input5, :input6, :input7, :pengambilan, :waktuambil, :pengantaran, :waktuantar, :lokasi, :rincian_lokasi, :customer_id)";
        $stmt = $db->prepare($sql);

        // bind parameter ke query
        $params = array(
            ":input1" => $input1,
            ":input2" => $input2,
            ":input3" => $input3,
            ":input4" => $input4,
            ":input5" => $input5,
            ":input6" => $input6,
            ":input7" => $input7,
            ":pengambilan" => $pengambilan,
            ":waktuambil" => $timepengambilan,
            ":pengantaran" => $pengantaran,
            ":waktuantar" => $timepengantaran,
            ":lokasi" => $lokasi,
            ":rincian_lokasi" => $rincian_lokasi,
            ":customer_id" => $customer_id
        );

        // eksekusi query untuk menyimpan ke database
        $saved = $stmt->execute($params);

        $sql = "INSERT INTO pembayaran (customer_id, satuan_id)
                SELECT customer_id, MAX(satuan_id) FROM satuan WHERE customer_id=$customer_id";

        $stmt = $db->prepare($sql);

        $saved = $stmt->execute();

        // jika query simpan berhasil, maka user sudah terdaftar
        // maka alihkan ke halaman login
        if ($saved) header("Location: payment.php");
    }
}

if (isset($_POST['kiloan'])) {
    $validation_check = true;
    if (empty($_POST['laundry_kiloan'])) {
        $JenisErr = "Pilih Salah Satu Layanan Kiloan!!";
        $validation_check = false;
    } else {
        $JenisErr = "";
    }


    if (empty($_POST['pengambilan'])) {
        $PengambilanErr = "Masukan Tanggal Pengambilan";
        $validation_check = false;
    } else {
        $PengambilanErr = "";
    }

    if (empty($_POST['pengantaran'])) {
        $PengambilanErr = "Masukan Tanggal Pengantaran";
        $validation_check = false;
    } else {
        $PengambilanErr = "";
    }

    if ($_POST['timepengambilan'] == "none") {
        $TimePengambilanErr = "Masukan Waktu Pengambilan";
        $validation_check = false;
    } else {
        $TimePengambilanErr = "";
    }

    if ($_POST['timepengantaran'] == "none") {
        $TimePengantaranErr = "Masukan Waktu Pengantaran";
        $validation_check = false;
    } else {
        $TimePengantaranErr = "";
    }

    if ($validation_check) {

        $layanan = $_POST['laundry_kiloan'];

        $pengambilan = $_POST['pengambilan'];
        $pengantaran = $_POST['pengantaran'];
        $timepengambilan = $_POST['timepengambilan'];
        $timepengantaran = $_POST['timepengantaran'];
        $lokasi = $_POST['lokasi'];
        $rincian_lokasi = $_POST['rincian_lokasi'];
        $customer_id = $_SESSION['user']['id'];
        // filter data yang diinputkan
        // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        // $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        // $no_telp = filter_input(INPUT_POST, 'no_telp', FILTER_SANITIZE_STRING);
        // // enkripsi password
        // $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        // $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


        // menyiapkan query
        $sql = "INSERT INTO kiloan (layanan, tgl_pengambilan, waktu_pengambilan, tgl_pengantaran, waktu_pengantaran, lokasi, rincian_lokasi, customer_id) 
                VALUES (:input, :pengambilan, :waktuambil, :pengantaran, :waktuantar, :lokasi, :rincian_lokasi, :customer_id)";
        $stmt = $db->prepare($sql);

        // bind parameter ke query
        $params = array(
            ":input" => $layanan,
            ":pengambilan" => $pengambilan,
            ":waktuambil" => $timepengambilan,
            ":pengantaran" => $pengantaran,
            ":waktuantar" => $timepengantaran,
            ":lokasi" => $lokasi,
            ":rincian_lokasi" => $rincian_lokasi,
            ":customer_id" => $customer_id
        );

        // eksekusi query untuk menyimpan ke database
        $saved = $stmt->execute($params);

        $sql = "INSERT INTO pembayaran (customer_id, kiloan_id)
                SELECT customer_id, MAX(kiloan_id) FROM kiloan WHERE customer_id=$customer_id";

        $stmt = $db->prepare($sql);

        $saved = $stmt->execute();

        // jika query simpan berhasil, maka user sudah terdaftar
        // maka alihkan ke halaman login
        if ($saved) header("Location: payment.php");
    }
}

?>
<script>
    $(document).ready(function() {
        $('input[id="jenis_layanan"]').on('change', function() {
            window.location = $(this).val();
        });

        $('#barangsatuan1').click(function() {
            if ($(this).is(":checked")) {
                $("#check1").html("<input type='number' value='1' name='input1' id='input1' min='1'/><p id='harga1'>35000</p>")
                $('input[id="input1"]').on('change', function() {
                    var x1 = document.getElementById("input1").value;
                    document.getElementById("harga1").innerHTML = x1 * 35000;
                });
            } else if ($(this).is(":not(:checked)")) {
                $("#check1").html("")
            }
        });
        $('#barangsatuan2').click(function() {
            if ($(this).is(":checked")) {
                $("#check2").html("<input type='number' value='1' name='input2' id='input2' min='1'/><p id='harga2'>20000</p>")
                $('input[id="input2"]').on('change', function() {
                    var x2 = document.getElementById("input2").value;
                    document.getElementById("harga2").innerHTML = x2 * 20000;
                });
            } else if ($(this).is(":not(:checked)")) {
                $("#check2").html("")
            }
        });
        $('#barangsatuan3').click(function() {
            if ($(this).is(":checked")) {
                $("#check3").html("<input type='number' value='1' name='input3' id='input3' min='1'/><p id='harga3'>30000</p>")
                $('input[id="input3"]').on('change', function() {
                    var x3 = document.getElementById("input3").value;
                    document.getElementById("harga3").innerHTML = x3 * 30000;
                });
            } else if ($(this).is(":not(:checked)")) {
                $("#check3").html("")
            }
        });
        $('#barangsatuan4').click(function() {
            if ($(this).is(":checked")) {
                $("#check4").html("<input type='number' value='1' id='input4' name='input4' min='1'/><p id='harga4'>10000</p>")
                $('input[id="input4"]').on('change', function() {
                    var x4 = document.getElementById("input4").value;
                    document.getElementById("harga4").innerHTML = x4 * 10000;
                });
            } else if ($(this).is(":not(:checked)")) {
                $("#check4").html("")
            }
        });
        $('#barangsatuan5').click(function() {
            if ($(this).is(":checked")) {
                $("#check5").html("<input type='number' value='1' id='input5' name='input5' min='1'/><p id='harga5'>25000</p>")
                $('input[id="input5"]').on('change', function() {
                    var x5 = document.getElementById("input5").value;
                    document.getElementById("harga5").innerHTML = x5 * 25000;
                });
            } else if ($(this).is(":not(:checked)")) {
                $("#check5").html("")
            }
        });
        $('#barangsatuan6').click(function() {
            if ($(this).is(":checked")) {
                $("#check6").html("<input type='number' value='1' id='input6' name='input6' min='1'/><p id='harga6'>25000</p>")
                $('input[id="input6"]').on('change', function() {
                    var x6 = document.getElementById("input6").value;
                    document.getElementById("harga6").innerHTML = x6 * 25000;
                });
            } else if ($(this).is(":not(:checked)")) {
                $("#check6").html("")
            }
        });
        $('#barangsatuan7').click(function() {
            if ($(this).is(":checked")) {
                $("#check7").html("<input type='number' value='1' name='input7'  id='input7' min='1'/><p id='harga7'>25000</p>")
                $('input[id="input7"]').on('change', function() {
                    var x7 = document.getElementById("input7").value;
                    document.getElementById("harga7").innerHTML = x7 * 25000;
                });
            } else if ($(this).is(":not(:checked)")) {
                $("#check7").html("")
            }
        });
    });
</script>