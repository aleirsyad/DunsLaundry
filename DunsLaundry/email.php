<?php

use PHPMailer\PHPMailer\PHPMailer;


if (isset($_POST['Name']) && isset($_POST['Email'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];
    $body = $_POST['body'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "dunslaundry@gmail.com";
    $mail->Password = 'dunsjaya123';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $mail->isHTML(true);
    $mail->setFrom($Email, $Name);
    $mail->addAddress("dunslaundry@gmail.com");
    $mail->Subject = ("$Email ($Subject)");
    $mail->Body = $Message;

    if ($mail->send()) {
        $status = "success";
        $response = "Email is sent!";
    } else {
        $status = "failed";
        $response = "Something is wrong : <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}
