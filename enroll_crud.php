<?php
require './Login-Reg/connection.php';

// CRUD => CREATE endpoint
if ($_POST['enroll']) {

    $fname  = $_POST['fname'];
    $mname  = $_POST['mname'];
    $lname  = $_POST['lname'];
    $gender = $_POST['gender'];
    $contactNo = $_POST['contactNo'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $query = "INSERT INTO `enrollment_form` (`firstName`, `middleNname`, `lastName`, `gender`, `contact`, `email`, `course`) VALUES ('$fname','$mname','$lname','$gender','$contactNo','$email', '$course')";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script> alert('Enrollment Data Inserted into Database') </script>";
    } else {
        echo "<script> alert('Failed to Enroll! Please try again.') </script>";
    }
}
