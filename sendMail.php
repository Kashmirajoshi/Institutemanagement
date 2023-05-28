<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "phpmailer/src/Exception.php";
require "phpmailer/src/PHPMailer.php";
require "phpmailer/src/SMTP.php";

if (isset($_POST['submit'])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'joshikashmira0910@gmail.com'; // Your gmail id
    $mail->Password = 'zumjmoqhgkmvbyhz'; // app password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->isHTML(true);

    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail->setFrom($email, $name);
    $mail->addAddress('joshikashmira0910@gmail.com'); // institute email id 

    $mail->FromName = $name;
    $mail->From = $email;
    $mail->Subject = $subject;
    $mail->Body = $message;

    if ($mail->send()) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email. Error: ' . $mail->ErrorInfo;
    }

    echo "<script> alert('Mail sent!'); </script>";

    // try {
    //     $mail->send();
    //     //echo $output;

    //     echo
    //     "
    //     <script>
    //     alert('Mail sent successfully!');
    //     document.location.href = 'institute.html';
    //     </script>
    //     ";
    // } catch (Exception $e) {
    //     echo $e->errorMessage();
    // } catch (Exception $e) {
    //     $e->getMessage();
    // }
}
