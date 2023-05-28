<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form | VIT Institute</title>

    <!-- FavIcon -->
    <link rel="icon" href="../IPimages/vitplain.jpeg" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body class="bg-info-subtle">
    <div class="container form-container">
        <div class="title">
            Registration Form
        </div>

        <form action="#" class="p-2" method="POST" enctype="multipart/form-data">
            <div class="form">

                <div class="form">
                    <div class="input_field">
                        <label>First Name</label>
                        <input type="text" class="input" name="fname" required>
                    </div>
                    <div class="input_field">
                        <label>Last Name</label>
                        <input type="text" class="input" name="lname" required>
                    </div>
                    <div class="input_field">
                        <label>Password</label>
                        <input type="password" class="input" name="password" required>
                    </div>
                    <div class="input_field">
                        <label>Confirm Password</label>
                        <input type="password" class="input" name="conpassword" required>
                    </div>
                    <div class="input_field">
                        <label>Gender</label>
                        <div class="custom_select">

                            <select name="gender" required>
                                <option value="">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option>others</option>
                            </select>
                        </div>
                    </div>

                    <div class="input_field">
                        <label>Upload Image</label>
                        <input type="file" name="uploadfile" style="width: 100%;">
                    </div>

                    <div class="input_field">
                        <label>Email Address</label>
                        <input type="text" class="input" name="email" required>
                    </div>
                    <div class="input_field">
                        <label>Phone Number</label>
                        <input type="text" class="input" name="phone" required>
                    </div>


                    <div class="input_field">
                        <label style="margin-right: 100px;">Caste</label>
                        <input type="radio" name="r1" value="General" required><label style="margin-left: 5px;">General</label>
                        <input type="radio" name="r1" value="OBC" required><label style="margin-left: 5px;">OBC</label>
                        <input type="radio" name="r1" value="SC" required><label style="margin-left: 5px;">SC</label>
                        <input type="radio" name="r1" value="ST" required><label style="margin-left: 5px;">ST</label>
                    </div>

                    <div class="input_field">
                        <label style="margin-right: 100px;">Language</label>
                        <input type="checkbox" name="language[]" value="English"><label style="margin-left: 5px;">English</label>
                        <input type="checkbox" name="language[]" value="Marathi"><label style="margin-left: 5px;">Marathi</label>
                        <input type="checkbox" name="language[]" value="Hindi"><label style="margin-left: 5px;">Hindi</label>
                    </div>

                    <div class="input_field">
                        <label>Address</label>
                        <textarea class="textarea" name="address" required></textarea>
                    </div>

                    <div class="input_field terms">
                        <input type="checkbox" name="terms_conditions">
                        <p class="mb-0 ms-2">Agree to terms and conditions</p>
                    </div>

                    <div class="input_field">
                        <input type="submit" value="Register" class="btn" name="register">
                    </div>

                    <div class="signup">
                        Already have an account?
                        <a href="./login.php" class="list-decoration-none">Signup Here</a>
                    </div>
                </div>
        </form>
    </div>
</body>

</html>

<?php

require_once '../vendor/autoload.php';

use Firebase\JWT\JWT;

// CRUD => CREATE endpoint
if ($_POST['register']) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname =  $_FILES["uploadfile"]["tmp_name"];

    $folder = "/images/.$filename";
    move_uploaded_file($tempname, $folder);


    $fname   = $_POST['fname'];
    $lname   = $_POST['lname'];
    $pwd     = $_POST['password'];
    $cpwd    = $_POST['conpassword'];
    $gender  = $_POST['gender'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $caste   = $_POST['r1'];
    $lang    = $_POST['language'];
    $address = $_POST['address'];
    $lang = $_POST['language'];

    $lang1 = implode(",", $lang);

    // Check if the passwords match
    if ($pwd !== $cpwd) {
        echo "Passwords do not match";
    } else {
        // Insert the user into the database
        $query = "INSERT INTO form (std_image, fname, lname, password, cpassword, gender, email, phone, caste, language, address) VALUES ('$folder','$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$caste','$lang1','$address')";
        mysqli_query($conn, $query);
    }



    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script> alert('User registered successfully.') </script>";
    } else {
        echo "<script> alert('User registeration Failed!') </script>";
    }
}
?>