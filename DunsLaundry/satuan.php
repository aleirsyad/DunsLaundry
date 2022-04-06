<?php
include('header.html');
include('laundry_script.php');
?>


<body class="bg-light">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="on">
        <section class="section-jenis-laundry-kiloan" id="laundry-kiloan">
            <div class="container">
                <div class="fwhite-bk">
                    <div class="pilih-jenis-layanan">
                        <div class="header-subtitle-laundry-kiloan border-bottom">
                            <h4 for="jenis_layanan">Pilih Jenis Layanan</h4>
                        </div>
                        <div class="row choose">
                            <div class="col-md-3 laundry-layanan">
                                <div class="form-check">
                                    <label><input class="form-check-input" type="radio" name="jenis_layanan" id="jenis_layanan" value="shoescare.php">Shoescare</label>
                                    <label class="form-check-label" for="flexRadioDefault1"></label>
                                </div>
                            </div>
                            <div class="col-md-3 laundry-shoescare">
                                <div class="form-check">
                                    <label><input class="form-check-input" type="radio" name="jenis_layanan" id="jenis_layanan" value="satuan.php" checked>Laundry</label>
                                    <label class="form-check-label" for="flexRadioDefault1"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pilih-jenis-layanan">
                        <div class="header-subtitle-laundry-kiloan border-bottom">
                            <h4 for="Jenis Laundry">Pilih Jenis Laundry</h4>
                        </div>
                        <div class="row choose">
                            <div class="col-md-3 laundry-layanan">
                                <div class="form-check">
                                    <label><input class="form-check-input" type="radio" name="jenis_laundry" id="jenis_laundry" value="satuan" onclick="document.location.href='satuan.php'" checked>Satuan</label>
                                    <label class="form-check-label" for="flexRadioDefault1"></label>
                                </div>
                            </div>
                            <div class="col-md-3 laundry-shoescare">
                                <div class="form-check">
                                    <label><input class="form-check-input" type="radio" name="jenis_laundry" id="jenis_laundry" value="kiloan" onclick="document.location.href='kiloan.php'">Kiloan</label>
                                    <label class="form-check-label" for="flexRadioDefault1"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pilih-laundry-waktu">
                        <div class="header-subtitle-laundry-satuan border-bottom">
                            <h4>Pilih Barang Laundry Satuan</h4>
                        </div>
                        <div class="choose-satuan">
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" name="barang_satuan1" id="barangsatuan1" value="celana">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Celana
                                </label>
                            </div>
                            <p id="check1"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="barang_satuan2" id="barangsatuan2" value="jas">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Jas
                                </label>
                            </div>
                            <p id="check2"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="barang_satuan3" id="barangsatuan3" value="bed_cover">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Bed Cover
                                </label>
                            </div>
                            <p id="check3"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="barang_satuan4" id="barangsatuan4" value="karpet">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Karpet
                                </label>
                            </div>
                            <p id="check4"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="barang_satuan5" id="barangsatuan5" value="gordyn">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Gordyn
                                </label>
                            </div>
                            <p id="check5"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="barang_satuan6" id="barangsatuan6" value="boneka">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Boneka
                                </label>
                            </div>
                            <p id="check6"></p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="barang_satuan7" id="barangsatuan7" value="tas">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Tas
                                </label>
                            </div>
                            <p id="check7"></p>
                        </div>
                        <div class="Waktu-Pengambilan">
                            <div class="header-subtitle laundry-kiloan border-bottom">
                                <h4>Waktu Pengambilan</h4>
                            </div>
                            <div class="form-date-take">
                                <label for="exampleInputEmail1" class="form-label">
                                    <h5>Tanggal</h5>
                                </label>
                                <input type="date" class="form-control" name="pengambilan" id="tgl_pengambilan" />
                            </div>
                            <div class="form-time-take">
                                <label for="exampleInputEmail1" class="form-label">
                                    <h5>Waktu</h5>
                                </label>
                                <select class="form-control" name="timepengambilan" id="Waktu_pengambilan">
                                    <option value="none">--pilih waktu pengambilan--</option>
                                    <option value="08:00:00">08:00</option>
                                    <option value="09:00:00">09:00</option>
                                    <option value="10:00:00">10:00</option>
                                    <option value="11:00:00">11:00</option>
                                    <option value="12:00:00">12:00</option>
                                    <option value="13:00:00">13:00</option>
                                    <option value="14:00:00">14:00</option>
                                    <option value="15:00:00">15:00</option>
                                    <option value="16:00:00">16:00</option>
                                </select>
                            </div>
                        </div>
                        <div class="Waktu-Pengantaran">
                            <div class="header-subtitle laundry-kiloan border-bottom">
                                <h4>Waktu Pengantaran</h4>
                            </div>
                            <div class="form-date-deliver">
                                <label for="exampleInputEmail1" class="form-label">
                                    <h5>Tanggal</h5>
                                </label>
                                <input type="date" class="form-control" name="pengantaran" id="tgl_pengantaran" />
                            </div>
                            <div class="form-time-deliver">
                                <label for="exampleInputEmail1" class="form-label">
                                    <h5>Waktu</h5>
                                </label>
                                <select class="form-control" name="timepengantaran" id="Waktu_pengantaran">
                                    <option value="none">--pilih waktu pengambilan--</option>
                                    <option value="08:00:00">08:00</option>
                                    <option value="09:00:00">09:00</option>
                                    <option value="10:00:00">10:00</option>
                                    <option value="11:00:00">11:00</option>
                                    <option value="12:00:00">12:00</option>
                                    <option value="13:00:00">13:00</option>
                                    <option value="14:00:00">14:00</option>
                                    <option value="15:00:00">15:00</option>
                                    <option value="16:00:00">16:00</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="header-subtitle-laundry-kiloan border-bottom">
                            <h4>Tentukan Alamat</h4>
                        </div>
                        <div class="input-alamat">
                            <div class="part-alamat mb-4">
                                <label for="LokasiAnda" class="form-label">Lokasi Anda</label>
                                <input type="text" class="form-control" name="lokasi" id="lokasi">
                            </div>
                            <div class=" part-alamat-rincian">
                                <label for="AlamatRincian" class="form-label" name="rincian_lokasi" id="rincian_lokasi">Rincian Alamat</label>
                                <textarea class="form-control" name="rincian_lokasi" id="rincian_lokasi" placeholder="contoh: rumah warna putih, gerbang hitam depan mushola, dll." id="floatingTextarea2"></textarea>
                            </div>
                        </div>
                        <div class="col-md-7 button-row">
                            <div class="button-selanjutnya">
                                <input type="submit" name="satuan" class="btn btn-selanjutnya" value="Selanjutnya" role="button"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

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
                            <ul class="list-unstyled footer-link-list link-menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Log In</a></li>
                                <li><a href="#">Sign Up</a></li>
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