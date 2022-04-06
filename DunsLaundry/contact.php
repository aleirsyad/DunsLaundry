<?php
session_start();
include 'config.php';
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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link rel="stylesheet" href="FrontEnd/styles/mainContact.css" />
  <link rel="stylesheet" href="FrontEnd/styles/main.css" />
</head>

<body>
  <!-- Navbar -->
  <?php require('navbar.php')?> 



  <main>
    <h4 class="sent-notification"></h4>

    <section class="section-contact justify-content-center mt-5" id="Contact">
      <div class="container">
        <div class="part-cs">
          <div class="header-text-cs text-center">
            <h2 class="text-head-cs ">Contact Us</h2>
          </div>
          <div class="row section-item">
            <div class="col-lg-7 col-sm-12 Send-us-item mx-auto">
              <div class="title-Send-Us-Subitem">
                <h3>Send Us A Message</h3>
              </div>
              <form method="POST" action="">
                <div class="row Send-Us-Form-Subitem">
                  <div class="form-field col-lg-11">
                    <input id="Name" type="text" class="input-text" name="Name" />
                    <label for="Name" class="label">Name</label>
                  </div>
                  <div class="form-field col-lg-11">
                    <input id="Email" type="text" class="input-text" name="Email" />
                    <label for="Email" class="label">Email</label>
                  </div>
                  <div class="form-field col-lg-11">
                    <input id="Phone" type="text" class="input-text" name="Phone" />
                    <label for="Phone" class="label">Contact Number</label>
                  </div>
                  <div class="form-field col-lg-11=">
                    <input id="Subject" type="text" class="input-text" name="Subject" />
                    <label for="Subject" class="label">Subject</label>
                  </div>
                  <div class="form-field col-lg-11">
                    <input id="Message" type="text" class="input-text" name="Message" />
                    <label for="Message" class="label">Message</label>
                  </div>
                  <div class="form-field col-lg-11 text-center">
                    <input type="submit" class="btn submit-btn" value="submit" name="submit" />
                  </div>
                </div>
              </form>
            </div>


            <div class="col-lg-5 address-item">
              <div class="addres">
                <ul>
                  <li class="li-oy "><span class="material-icons">
                      place
                    </span><span class="text-li map-icon"> Jl.Tembalang No. X, Tembalang, Semarang,
                      Jawa Tengah, Indonesia 41xxx</span></li>
                  <li class="li-oy"><span class="material-icons">
                      call
                    </span><span class="text-li">0878-xxxx-xxxx</span></li>
                  <li class="li-oy"><span class="material-icons">
                      email
                    </span><span class="text-li">dunslaundry@gmail.com</span></li>
                </ul>
              </div>
              <div class="sosmed-icon">
                <div class="row text-center">
                  <div class="col youtube col-lg-1 col-md-2 col-sm-1 mx-lg-2 ">
                    <a href="https://www.youtube.com/watch?v=CT1dichRiWE"><img src="FrontEnd/images/youtube.png" alt="Youtube"></a>
                  </div>
                  <div class="col instagram col-lg-1 col-md-2 col-sm-1 mx-lg-2">
                    <a href="https://www.instagram.com/septianlsan/"><img src="FrontEnd/images/instagram.png" alt="instagram"></a>
                  </div>
                  <div class="col Facebook col-lg-1 col-md-2 col-sm-1 mx-lg-2">
                    <a href="https://money.kompas.com/read/2021/11/22/103500126/jual-beli-hewan-termasuk-ikan-hias-dilarang-facebook-dan-ig-ini-kata-meta?page=all"><img src="FrontEnd/images/facebook.png" alt="facebook"></a>
                  </div>
                  <div class="col Twitter col-lg-1 col-md-2 col-sm-1 mx-lg-2">
                    <a href="https://twitter.com/Twitter?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="FrontEnd/images/twitter.png" alt="twitter"></a>
                  </div>
                </div>
              </div>
              <div class="maps">
                <div class="mapouter">
                  <div class="gmap_canvas"><iframe width="340" height="210" id="gmap_canvas" src="https://maps.google.com/maps?q=Jl.Tembalang%20No.%20103,%20Tembalang,%20Semarang,%20%20Jawa%20Tengah&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br>
                    <style>
                      .mapouter {
                        position: relative;
                        text-align: right;
                        height: 210px;
                        width: 340px;
                      }
                    </style><a href="https://www.embedgooglemap.net"></a>
                    <style>
                      .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 210px;
                        width: 340px;
                      }
                    </style>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      </div>
    </section>
  </main>

  <!-- footer -->
  <?php require('footer.php')?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="FrontEnd/libraries/jquery/jquery-3.6.0.min.js"></script>
  <script src="Frontend/libraries/js/bootstrap.js"></script>
  <script src="FrontEnd/libraries/retina js/retina.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>"

  <?php

  // use PHPMailer\PHPMailer\PHPMailer;
  // use PHPMailer\PHPMailer\Exception;


  // if (isset($_POST['submit'])) {
  //   $Name = $_POST['Name'];
  //   $Email = $_POST['Email'];
  //   $Phone = $_POST['Phone'];
  //   $Subject = $_POST['Subject'];
  //   $Message = $_POST['Message'];

  //   require_once "PHPMailer/PHPMailer.php";
  //   require_once "PHPMailer/SMTP.php";
  //   require_once "PHPMailer/Exception.php";

  //   $mail->isSMTP();
  //   $mail->Host = "smtp.gmail.com";
  //   $mail->SMTPAuth = true;
  //   $mail->Username = "dunslaundry@gmail.com";
  //   $mail->Password = 'dunsjaya123';
  //   $mail->Port = 587;
  //   // $mail->SMTPSecure = "ssl";

  //   $mail->isHTML(true);
  //   $mail->setFrom($Email, $Name);
  //   $mail->addAddress("dunslaundry@gmail.com");
  //   $mail->Subject = ("$Email ($Subject)");
  //   $mail->Body = $Message;

  //   if ($mail->send()) {
  //     $status = "success";
  //     $response = "Email is sent!";
  //   } else {
  //     $status = "failed";
  //     $response = "Something is wrong : <br>" . $mail->ErrorInfo;
  //   }

  //   exit(json_encode(array("status" => $status, "response" => $response)));
  // }

  ?>
  <!--   
  <script type="text/javascript">
    function sendEmail() {
      var Name = $("Name");
      var Email = $("Email");
      var Phone = $("Phone");
      var Subject = $("Subject");
      var Message = $("Message");

      if (isNotEmpty(Name) && isNotEmpty(Email) && isNotEmpty(Phone) && isNotEmpty(Subject) && isNotEmpty(Message)) {
        $.ajax({
          url: 'email.php',
          method: 'POST',
          dataType: 'json',
          data: {
            Name: Name.val(),
            Email: Email.val(),
            Phone: Phone.val(),
            Subject: Subject.val(),
            Message: Message.val()
          },
          success: function(response) {
            $('#DunsForm')[0].reset();
            $('.sent-notification').text("Message sent successfully!");
          }
        });
      }
    }

    function isNotEmpty(caller) {
      if (caller.val() == "") {
        caller.css('border', '1px solid blue');
        return false;
      } else {
        caller.css('border', '');
        return true;
      }
    }
  </script> -->
</body>

</html>