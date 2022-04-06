<?php include('header.html'); ?>
<script src="ajax.js"></script>
<script>
    $(document).ready(function() {
        $('input[id="jenis_layanan"]').on('change', function() {
            window.location = $(this).val();
        });

        $('#barangsatuan1').click(function() {
            if ($(this).is(":checked")) {
                $("#check1").html("<input type='number' value='1' id='input1' min='1'/><p id='harga1'>35000</p>")
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
                $("#check2").html("<input type='number' value='1' id='input2' min='1'/><p id='harga2'>20000</p>")
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
                $("#check3").html("<input type='number' value='1' id='input3' min='1'/><p id='harga3'>30000</p>")
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
                $("#check4").html("<input type='number' value='1' id='input4' min='1'/><p id='harga4'>10000</p>")
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
                $("#check5").html("<input type='number' value='1' id='input5' min='1'/><p id='harga5'>25000</p>")
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
                $("#check6").html("<input type='number' value='1' id='input6' min='1'/><p id='harga6'>25000</p>")
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
                $("#check7").html("<input type='number' value='1' id='input7' min='1'/><p id='harga7'>25000</p>")
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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Duns Laundry</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
    <p>&larr; <a href="timeline.php">Kembali</a>
    <form action="" method="get" autocomplete="on">
        <label for="jenis_layanan">Pilih Jenis Layanan</label><br>
        <label><input type="radio" name="jenis_layanan" id="jenis_layanan" value="shoescare.php">Shoescare</label>
        <label><input type="radio" name="jenis_layanan" id="jenis_layanan" value="laundry.php" checked>Laundry</label>
        <br>

        <label for="Jenis Laundry">Pilih Jenus Laundry</label><br>
        <label><input type="radio" name="jenis_laundry" id="jenis_laundry" value="satuan" onclick="document.location.href='laundry.php'" checked>Satuan</label>
        <label><input type="radio" name="jenis_laundry" id="jenis_laundry" value="kiloan" onclick="kiloan()">Kiloan</label>

        <div id="jenis">
            <label>Pilih Barang Laundry Satuan :</label>
            <br>
            <label><input type="checkbox" name="barang_satuan" id="barangsatuan1" value="celana"> Celana</label><br>
            <p id="check1"></p>
            <label><input type="checkbox" name="barang_satuan" id="barangsatuan2" value="jas"> Jas</label><br>
            <p id="check2"></p>
            <label><input type="checkbox" name="barang_satuan" id="barangsatuan3" value="bed_cover"> Bed Cover</label><br>
            <p id="check3"></p>
            <label><input type="checkbox" name="barang_satuan" id="barangsatuan4" value="karpet"> Karpet</label><br>
            <p id="check4"></p>
            <label><input type="checkbox" name="barang_satuan" id="barangsatuan5" value="gordyn"> Gordyn</label><br>
            <p id="check5"></p>
            <label><input type="checkbox" name="barang_satuan" id="barangsatuan6" value="boneka"> Boneka</label><br>
            <p id="check6"></p>
            <label><input type="checkbox" name="barang_satuan" id="barangsatuan7" value="tas"> Tas</label><br>
            <p id="check7"></p>

            <label for="waktu_pengambilan">Waktu Pengambilan</label><br>
            <label>Tanggal <input type="date" name="pengambilan" id="tgl_pengambilan"></label><br>
            <label>Waktu </label>
            <select name="pengambilan" id="waktu_pengambilan">
                <option value="none">--pilih waktu pengambilan--</option>
                <option value="08:00">08:00</option>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
            </select>
            <br><br>

            <label>Waktu Pengantaran</label><br>
            <label>Tanggal <input type="date" name="pengantaran" id="tgl_pengantaran"></label><br>
            <label>Waktu </label>
            <select name="pengantaran" id="waktu_pengantaran">
                <option value="none">--pilih waktu pengantaran--</option>
                <option value="08:00">08:00</option>
                <option value="09:00">09:00</option>
                <option value="10:00">10:00</option>
                <option value="11:00">11:00</option>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
            </select>
        </div>
    </form>
</body>