<?php

require_once('config.php');
$id = $_GET['id'];

if (!isset($_POST["submit"])) {
    $query = "SELECT * FROM kiloan WHERE kiloan_id= $id";
    $result = $db->query($query);
    if (!$result) {
        die("Could not the query database: <br />" . $db->error);
    } else {
        while ($row = $result->fetchObject()) {
            $bobot = $row->bobot;
        }
    }
} else {
    $valid = true;
    $bobot = $_POST['bobot'];
    $query = "UPDATE kiloan SET bobot = $bobot WHERE kiloan_id=$id";
    $result = $db->query($query);
    if (!$result) {
        die("Could not the query database: <br />" . $db->error);
    } else {

        header('Location: index.php');
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
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Edit Bobot Kiloan</div>
            <div class="card-body">
                <form method="POST" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?id=' . $id; ?>">
                    <label for="bobot">Bobot : </label>
                    <input type='number' <?php echo 'value="' . $bobot . '"' ?> name='bobot' id='bobot' min='0' />
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                    <a href="index.php" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
    <?php
    // $db->close();
    ?>

</body>

</html>