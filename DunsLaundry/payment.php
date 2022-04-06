<?php
require_once("auth.php");

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $customer_id = $_SESSION['user']['id'];
    require_once("config.php");

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $file = addslashes(file_get_contents($tempname));
    $folder = "bukti_pembayaran/" . $filename;

    // Select file type
    $imageFileType = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    // valid file extensions
    $extensions_arr = array("jpg", "jpeg", "png", "gif");

    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {
        // Now let's move the uploaded image into the folder: image

        if (move_uploaded_file($tempname, $folder)) {
            $sql = "UPDATE pembayaran SET bukti_pembayaran = '$file'
            WHERE pembayaran_id IN (SELECT max(pembayaran_id) FROM pembayaran WHERE customer_id = $customer_id)";
            // Execute query
            $saved = $db->exec($sql);

            if ($saved) header("Location: paymentTBerhasil.php");

            $msg = "Image uploaded successfully";
            function_alert($msg);
        } else {
            $msg = "Failed to upload image";
            function_alert($msg);
        }
    }
}

function function_alert($msg)
{

    // Display the alert box; note the Js tags within echo, it performs the magic
    echo "<script>alert('$msg');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- script -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="FrontEnd/libraries/css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="FrontEnd/styles/PaymentTB.css" />
    <script>
        $(function() {
            $('.toggle').on('click', function() {
                if ($('.item').hasClass('active')) {
                    $('.item').removeClass('active');
                } else {
                    $('.item').addClass('active');
                }
            });
        });
    </script>
</head>

<body>
    <!-- Navbar -->

    <!-- header -->
    <!-- <header class="background-header"></header> -->

    <!-- Main -->
    <main>
        <section class="section-pay" id="paymentaccount">
            <div class="container">
                <div class="information-payment ">
                    <div class="row d-flex justify-content-evenly">
                        <div class="col-md-5 part-pay-img">
                            <div class="part-image">
                                <img src="FrontEnd/images/CT.png" alt="img-pay">
                            </div>
                            <div class="text-under-image">
                                <h3>
                                    Complete Transaction?
                                </h3>
                                <p>Once your payment is confirmed, we will send your receipt to your email address and Whatsapp</p>
                            </div>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div>
                                    <input type="file" name="image">
                                </div>
                                <div class="button-pay-image">
                                    <button class="btn btn-input-image" type="submit" name="upload">I have Completed Payment</button>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-5 part-pay-totalprice">
                            <div class="text-header">
                                <h3>Make a Payment Before
                                    We Deliver your Laundry</h3>
                                <p>Please Transfer to:</p>
                            </div>
                            <div class="main-pay">
                                <div class="part-pay-transfer">
                                    <label for="Selecttextpay" class="form-label">Pilih Metode Pembayaran:</label>
                                    <select id="Selectchoosepay" name="Selectchoosepay" class="form-select" onchange="virtualAccount()">
                                        <option value="0">Select...</option>
                                        <option value="2301xxxxxxxx">Bank BCA</option>
                                        <option value="0817xxxxxxxx">Gopay</option>
                                        <option value="0819xxxxxxxx">Dana</option>
                                    </select>
                                </div>
                                <div class="part-pay-virtual-account mt-4">
                                    <label for="Selecttextpayvc" class="form-label">Nomor Rekening</label>
                                    <input type="text" id="virtualAccount" name="virtualAccount" class="form-control" value="" readonly>

                                </div>
                            </div>
                            <div class="payment">
                                <div class="row">
                                    <div class="col-md-4 text-information ml-5 mt-4">
                                        <ul class="list-unstyled information-list ">
                                            <li class="order-id mb-2" style="color: #df7238; font-size: 18px; font-weight: 600;">Order ID</li>
                                            <li>Laundry Kiloan</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 number-information ml-5 mt-4">
                                        <ul class="list-unstyled information-list">
                                            <li class="order-id mb-2" style=" font-size: 16px; font-weight: 500;">53023</li>
                                            <li>6 Kg</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="total-price border-top pt-3 mt-4 ">
                                <div class="row">
                                    <div class="col-md-5 part-1 ml-5">
                                        <ul class="list-unstyled textprice-information-link-list ">
                                            <li class="h3">Total</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5 part-2">
                                        <ul class="list-unstyled price-information-link-list ">
                                            <li class="h3">Rp30.150,00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
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
    <script>
        function virtualAccount() {
            var pay = document.getElementById("Selectchoosepay");
            document.getElementById("virtualAccount").value = pay.options[pay.selectedIndex].value;
        }
    </script>

</body>

</html>