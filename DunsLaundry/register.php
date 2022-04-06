<?php

session_start();

if (isset($_SESSION["user"])) {
  header("Location: index.php");
  exit;
}

require_once("config.php");

if (isset($_POST['register'])) {

  // filter data yang diinputkan
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $no_telp = filter_input(INPUT_POST, 'no_telp', FILTER_SANITIZE_STRING);
  // enkripsi password
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


  // menyiapkan query
  $sql = "INSERT INTO user (name, username, email,no_telp, password) 
            VALUES (:name, :username, :email, :no_telp, :password)";
  $stmt = $db->prepare($sql);

  // bind parameter ke query
  $params = array(
    ":email" => $email,
    ":password" => $password,
    ":name" => $name,
    ":no_telp" => $no_telp,
    ":username" => $username

  );

  // eksekusi query untuk menyimpan ke database
  $saved = $stmt->execute($params);

  // jika query simpan berhasil, maka user sudah terdaftar
  // maka alihkan ke halaman login
  if ($saved) header("Location: login.php");
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
  <link rel="stylesheet" href="FrontEnd/styles/mainsignup.css" />
  <link rel="stylesheet" href="FrontEnd/styles/main.css" />
</head>

<body>
  <!-- Navbar -->
  <?php require('navbar.php') ?>

  <main>
    <section class="section-sign-up " id="LogIn">
      <div class="container">
        <div class="row g-3 content">
          <div class="header-signup">
            <h3>Sign Up</h3>
          </div>
          <form action="" method="POST">
            <div class="form-group">
              <label for="name">Nama Lengkap</label>
              <input class="form-control" type="text" name="name" />
            </div>

            <div class="form-group">
              <label for="username">Username</label>
              <input class="form-control" type="text" name="username" />
            </div>

            <div class="form-group">
              <label for="email">No Telepon</label>
              <input class="form-control" type="text" name="no_telp" />
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input class="form-control" type="email" name="email" />
            </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input class="form-control" type="password" name="password" placeholder="****" />
            </div>

            <div class="col-12 d-flex justify-content-center button-signup">
              <button type="submit" class="btn btn-primary" name="register" value="Daftar">Daftar</button>
              <!-- <input type="submit" class="btn btn-primary" name="register" value="Daftar" /> -->
            </div>

            <p class="pt-3">Sudah punya akun? <a href="login.php"> Masuk sini</a></p>
          </form>
        </div>
    </section>
  </main>

  <!-- Footer -->
  <?php require('footer.php') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="FrontEnd/libraries/jquery/jquery-3.6.0.min.js"></script>
  <script src="Frontend/libraries/js/bootstrap.js"></script>
  <script src="FrontEnd/libraries/retina js/retina.min.js"></script>
</body>

</html>