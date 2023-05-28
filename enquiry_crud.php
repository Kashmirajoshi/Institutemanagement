<?php
require './Login-Reg/connection.php';

// CRUD => CREATE endpoint
if ($_POST['submit']) {

    $name  = $_POST['name'];
    $sub   = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO `enquiry_form` (`name`, `subject`, `email`, `message`) VALUES ('$name','$sub','$email','$message')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script> alert('Data Inserted into Database') </script>";
    } else {
        echo "<script> alert('Failed to submit the Enquiry! Please try again.') </script>";
    }
}
