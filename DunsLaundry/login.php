<?php

session_start();

if (isset($_SESSION["user"])) {
  header("Location: index.php");
  exit;
}

require_once("config.php");


if (isset($_POST['login'])) {

  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

  $sql = "SELECT * FROM user WHERE username=:username OR email=:email";
  $stmt = $db->prepare($sql);

  // bind parameter ke query
  $params = array(
    ":username" => $username,
    ":email" => $username
  );

  $stmt->execute($params);

  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  // jika user terdaftar
  if ($user) {
    // verifikasi password
    if (password_verify($password, $user["password"])) {
      // buat Session
      session_start();
      $_SESSION["user"] = $user;
      // login sukses, alihkan ke halaman timeline
      header("Location: index.php");
    }
  }
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
  <link rel="stylesheet" href="FrontEnd/styles/mainlogin.css" />
  <link rel="stylesheet" href="FrontEnd/styles/main.css" />
  <link rel="stylesheet" href="FrontEnd/styles/mainlogin.css">
</head>

<body>
  <!-- Navbar -->
  <?php require('navbar.php') ?>

  <main>
    <div class="section-log-in d-flex justify-content-center pt-5" id="LogIn">
      <div class="container">
        <div class="row content text-center">
          <div class="header-login mb-4">
            <h3>Log In</h3>
          </div>
          <div class="col-md-7 mt-5">
            <form action="" method="POST">

              <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" />
              </div>


              <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" />
              </div>

              <div class="d-flex justify-content-center">
                <input type="submit" class="btn btn-class mt-4" name="login" value="Masuk" />
              </div>

            </form>
            <p class="pt-3">Belum punya akun? <a href="register.php">Daftar Sini</a></p>
          </div>
          <div class="col-md-5 mb-3 d-flex justify-content-center">
            <img src="FrontEnd/images/bro.png" alt="img_login">
          </div>

        </div>
      </div>
    </div>
  </main>
  <!-- Footer -->
  <?php require('footer.php') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="FrontEnd/libraries/jquery/jquery-3.6.0.min.js"></script>
  <script src="Frontend/libraries/js/bootstrap.js"></script>
  <script src="FrontEnd/libraries/retina js/retina.min.js"></script>
</body>

</html>