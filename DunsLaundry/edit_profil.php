<?php

require_once("auth.php");
$id = $_SESSION['user']['id'];
$conn = mysqli_connect("localhost", "root", "", "dunslaundry");

if (!isset($_POST["submit"])) {
    $query = "SELECT * FROM user WHERE id= $id";
    $result = $conn->query($query);
    if (!$result) {
        die("Could not the query database: <br />" . $conn->error);
    } else {
        while ($row = $result->fetch_Object()) {
            $id = $row->id;
        }
    }
} else {
    $valid = true;
    $tgl_lahir = $_POST['edit_ttl'];
    $jenis_kelamin = $_POST['edit_kelamin'];
    $query = "UPDATE user SET tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jenis_kelamin' WHERE id=$id";
    $result = $conn->query($query);
    if (!$result) {
        die("Could not the query database: <br />" . $conn->error);
    } else {
        header('Location: profileUser.php');
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="FrontEnd/libraries/css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="FrontEnd/styles/mainProfiles.css" />
    <link rel="stylesheet" href="FrontEnd/styles/main.css" />
</head>

<body>
    <?php require('navbar.php') ?>
    <main>
        <section class="section-edit-profile pt-5 pb-5" id="ProfileNameEdit">
            <div class="container">
                <div class="title-update-name">
                    <h2>Edit Profile</h2>
                </div>
                <form method="POST" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $id; ?>">
                    <div class="edit-profile">
                        <div class="mt-4 mb-3">
                            <label for="labelname" class="form-label">Ganti Tanggal lahir</label>
                            <input type="date" class="form-control col-lg-6 col-md-9" name="edit_ttl" id="inputChangeName">
                        </div>
                        <div class="mt-4 mb-3">
                            <div class="part-gender col-lg-6 col-md-9">
                                <label for="Selectgender" class="form-label">Pilih Kelamin:</label>
                                <select id="Selectgender" name="edit_kelamin" class="form-select">
                                    <option value="Pria">Pria</option>
                                    <option value="Wanita">Wanita</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                    <a href="profileUser.php" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </section>
    </main>

    <?php require('footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="FrontEnd/libraries/jquery/jquery-3.6.0.min.js"></script>
    <script src="Frontend/libraries/js/bootstrap.js"></script>
    <script src="FrontEnd/libraries/retina js/retina.min.js"></script>

</body>

</html>