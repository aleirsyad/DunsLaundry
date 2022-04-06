<?php

session_start();

if (isset($_SESSION["admin"])) {
    header("Location: index.php");
    exit;
}

require_once("config.php");

if (isset($_POST['login'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM admin WHERE username=:username";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username
    );

    $stmt->execute($params);

    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if ($admin) {
        // verifikasi password
        if (password_verify($password, $admin["password"])) {
            // buat Session
            session_start();
            $_SESSION["admin"] = $admin;
            // login sukses, alihkan ke halaman timeline
            header("Location: index.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Duns Laundry</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                <p>&larr; <a href="index.php">Home</a>

                <h4>Masuk ke Admin Duns Laundry</h4>
                <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

                <form action="" method="POST">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username atau email" />
                    </div>


                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                    </div>

                    <input type="submit" class="btn btn-warning btn-block" name="login" value="Masuk" />

                </form>

            </div>


        </div>
    </div>

</body>

</html>