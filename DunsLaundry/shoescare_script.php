<?php

require_once("auth.php");
require_once("config.php");

$JenisErr = $PengambilanErr = $PengantaranErr = $TimePengambilanErr = $TimePengantaranErr = "";

if (isset($_POST['shoescare'])) {
    $validation_check = true;
    if (!(isset($_POST['barang_shoescare1']) or isset($_POST['barang_shoescare2']) or isset($_POST['barang_shoescare3']) or
        isset($_POST['barang_shoescare4']) or isset($_POST['barang_shoescare5']))) {
        $JenisErr = "Masukan Barang yang ingin dilaundry!";
        $validation_check = false;
    }

    if (empty($_POST['pengambilan'])) {
        $PengambilanErr = "Masukan Tanggal Pengambilan";
        $validation_check = false;
    } else {
        $PengambilanErr = "";
    }

    if (empty($_POST['pengantaran'])) {
        $PengantaranErr = "Masukan Tanggal Pengantaran";
        $validation_check = false;
    } else {
        $PengantaranErr = "";
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

    // $check = $_POST["barang_shoescare"];
    // $barang = "";
    // foreach ($check as $barang1) {
    //     $barang .= $barang1 . ",";
    // }
    if ($validation_check) {
        $input1 = '0';
        $input2 = '0';
        $input3 = '0';
        $input4 = '0';
        $input5 = '0';


        if (isset($_POST['barang_shoescare1'])) {
            $input1 = $_POST["input1"];
        }
        if (isset($_POST['barang_shoescare2'])) {
            $input2 = $_POST["input2"];
        }
        if (isset($_POST['barang_shoescare3'])) {
            $input3 = $_POST["input3"];
        }
        if (isset($_POST['barang_shoescare4'])) {
            $input4 = $_POST["input4"];
        }
        if (isset($_POST['barang_shoescare5'])) {
            $input5 = $_POST["input5"];
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
        $sql = "INSERT INTO shoescare (fast_cleaning, deep_cleaning, whitening, leather_shoescare, repaint, tgl_pengambilan, waktu_pengambilan, tgl_pengantaran, waktu_pengantaran, lokasi, rincian_lokasi, customer_id) 
            VALUES (:input1, :input2, :input3, :input4, :input5, :pengambilan, :waktuambil, :pengantaran, :waktuantar, :lokasi, :rincian_lokasi, :customer_id)";
        $stmt = $db->prepare($sql);

        // bind parameter ke query
        $params = array(
            ":input1" => $input1,
            ":input2" => $input2,
            ":input3" => $input3,
            ":input4" => $input4,
            ":input5" => $input5,
            ":pengambilan" => $pengambilan,
            ":waktuambil" => $timepengambilan,
            ":pengantaran" => $pengantaran,
            ":waktuantar" => $timepengantaran,
            ":lokasi" => $lokasi,
            ":rincian_lokasi" => $rincian_lokasi,
            ":customer_id" => $customer_id
            // ":email" => $email,
            // ":password" => $password,
            // ":name" => $name,
            // ":no_telp" => $no_telp,
            // ":username" => $username

        );

        // eksekusi query untuk menyimpan ke database
        $saved = $stmt->execute($params);

        $sql = "INSERT INTO pembayaran (customer_id, shoescare_id)
                SELECT customer_id, MAX(shoescare_id) FROM shoescare WHERE customer_id=$customer_id";

        $stmt = $db->prepare($sql);

        $saved = $stmt->execute();

        // jika query simpan berhasil, maka user sudah terdaftar
        // maka alihkan ke halaman login
        if ($saved) header("Location: payment.php");
    }
}

?>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
    function paymentberhasil() {
        var val1 = "shoescare";
        var val2 = $('#tgl_pengambilan').val();
        var val3 = $('#Waktu_pengambilan').val();
        var val4 = $('#tgl_pengantaran').val();
        var val5 = $('#Waktu_pengantaran').val();
        $.ajax({
            type: 'POST',
            url: 'paymentTBerhasil.php',
            data: {
                jenis_layanan: val1,
                pengambilan: val2,
                timepengambilan: val3,
                pengantaran: val4,
                timepengantaran: val5
            },
            success: function(response) {
                $('result').html(response);
            }
        });
    }

    $(document).ready(function() {
        $('input[name="jenis_layanan"]').on('change', function() {
            window.location = $(this).val();
        });

        $('#barang1').click(function() {
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
        $('#barang2').click(function() {
            if ($(this).is(":checked")) {
                $("#check2").html("<input type='number' value='1' name='input2' id='input2' min='1'/><p id='harga2'>35000</p>")
                $('input[id="input2"]').on('change', function() {
                    var x1 = document.getElementById("input2").value;
                    document.getElementById("harga2").innerHTML = x1 * 35000;
                });
            } else if ($(this).is(":not(:checked)")) {
                $("#check2").html("")
            }
        });
        $('#barang3').click(function() {
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
        $('#barang4').click(function() {
            if ($(this).is(":checked")) {
                $("#check4").html("<input type='number' value='1' name='input4' id='input4' min='1'/><p id='harga4'>10000</p>")
                $('input[id="input4"]').on('change', function() {
                    var x4 = document.getElementById("input4").value;
                    document.getElementById("harga4").innerHTML = x4 * 10000;
                });
            } else if ($(this).is(":not(:checked)")) {
                $("#check4").html("")
            }
        });
        $('#barang5').click(function() {
            if ($(this).is(":checked")) {
                $("#check5").html("<input type='number' value='1' name='input5' id='input5' min='1'/><p id='harga5'>25000</p>")
                $('input[id="input5"]').on('change', function() {
                    var x5 = document.getElementById("input5").value;
                    document.getElementById("harga5").innerHTML = x5 * 25000;
                });
            } else if ($(this).is(":not(:checked)")) {
                $("#check5").html("")
            }
        });
    });
</script>