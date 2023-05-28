<?php include("connection.php");

$id = $_GET['id'];
$query = "SELECT * FROM form WHERE id = '$id'";
$data = mysqli_query($conn, $query);
// $total = mysqli_num_rows($data);
($result = mysqli_fetch_assoc($data));
print_r($result);
$language = $result['language'];
$language1 = explode(",", $language);
?>

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
                        <input type="text" class="input" value="<?php echo $result['fname']; ?> " name="fname" required>
                    </div>
                    <div class="input_field">
                        <label>Last Name</label>
                        <input type="text" class="input" value="<?php echo $result['lname']; ?> " name="lname" required>
                    </div>
                    <div class="input_field">
                        <label>Password</label>
                        <input type="password" class="input" value="<?php echo $result['password']; ?> " name="password" required>
                    </div>
                    <div class="input_field">
                        <label>Confirm Password</label>
                        <input type="password" class="input" value="<?php echo $result['cpassword']; ?> " name="conpassword" required>
                    </div>
                    <div class="input_field">
                        <label>Gender</label>
                        <div class="custom_select">

                            <select name="gender" required>
                                <option value="">Select</option>
                                <option value="male" <?php
                                                        if ($result['gender'] == 'male') {
                                                            echo "selected";
                                                        }
                                                        ?>>Male</option>
                                <option value="female" <?php
                                                        if ($result['gender'] == 'female') {
                                                            echo "selected";
                                                        }
                                                        ?>>Female</option>
                                <option value="others" <?php
                                                        if ($result['gender'] == 'others') {
                                                            echo "selected";
                                                        }
                                                        ?>>others</option>
                            </select>
                        </div>
                    </div>

                    <div class="input_field">
                        <label>Upload Image</label>
                        <input type="file" value="<?php echo $result['std_image']; ?>" name="uploadfile" style="width: 100%;">
                    </div>

                    <div class="input_field">
                        <label>Email Address</label>
                        <input type="text" class="input" value="<?php echo $result['email']; ?> " name="email" required>
                    </div>
                    <div class="input_field">
                        <label>Phone Number</label>
                        <input type="text" class="input" value="<?php echo $result['phone']; ?> " name="phone" required>
                    </div>


                    <div class="input_field">
                        <label style="margin-right: 100px;">Caste</label>
                        <input type="radio" name="r1" value="General" <?php
                                                                        if ($result['caste'] == "General") {
                                                                            echo "checked";
                                                                        }
                                                                        ?> required><label style="margin-left: 5px;">General</label>
                        <input type="radio" name="r1" value="OBC" <?php
                                                                    if ($result['caste'] == "OBC") {
                                                                        echo "checked";
                                                                    }
                                                                    ?> required><label style="margin-left: 5px;">OBC</label>
                        <input type="radio" name="r1" value="SC" <?php
                                                                    if ($result['caste'] == "SC") {
                                                                        echo "checked";
                                                                    }
                                                                    ?> required><label style="margin-left: 5px;">SC</label>
                        <input type="radio" name="r1" value="ST" <?php
                                                                    if ($result['caste'] == "ST") {
                                                                        echo "checked";
                                                                    }
                                                                    ?> required><label style="margin-left: 5px;">ST</label>
                    </div>

                    <div class="input_field">
                        <label style="margin-right: 100px;">Language</label>
                        <input type="checkbox" name="language[]" value="English" <?php
                                                                                    if (in_array('English', $language1)) {
                                                                                        echo "checked";
                                                                                    }

                                                                                    ?>><label style="margin-left: 5px;">English</label>
                        <input type="checkbox" name="language[]" value="Marathi" <?php
                                                                                    if (in_array('Marathi', $language1)) {
                                                                                        echo "checked";
                                                                                    }

                                                                                    ?>><label style="margin-left: 5px;">Marathi</label>
                        <input type="checkbox" name="language[]" value="Hindi" <?php
                                                                                if (in_array('Hindi', $language1)) {
                                                                                    echo "checked";
                                                                                }

                                                                                ?>><label style="margin-left: 5px;">Hindi</label>
                    </div>

                    <div class="input_field">
                        <label>Address</label>
                        <textarea class="textarea" name="address" required>
                            <?php echo  $result['address']; ?>
                        </textarea>
                    </div>

                    <div class="input_field terms">
                        <input type="checkbox" name="terms_conditions">
                        <p class="mb-0 ms-2">Agree to terms and conditions</p>
                    </div>

                    <div class="input_field">
                        <input type="submit" value="Update" class="btn" name="update">
                    </div>

                </div>
        </form>
    </div>
</body>

</html>


<?php
if ($_POST['update']) {
    $filename = $_FILES["uploadfile"]["name"];
    $tempname =  $_FILES["uploadfile"]["tmp_name"];

    $folder = "./images/.$filename";
    move_uploaded_file($tempname, $folder);


    $fname   = $_POST['fname'];
    $lname   = $_POST['lname'];
    $pwd     = $_POST['password'];
    $cpwd    = $_POST['conpassword'];
    $gender  = $_POST['gender'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $caste   = $_POST['r1'];
    $address = $_POST['address'];

    $lang = $_POST['language'];
    $lang1 = implode(",", $lang);



    $query = "UPDATE form SET std_image='$folder', fname='$fname', lname='$lname', password='$pwd', cpassword='$cpwd',gender='$gender',email='$email',phone='$phone',caste='$caste',language='$lang1',address='$address' WHERE id='$id' ";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Record Updated') </script>";

?>
        <meta http-equiv="refresh" content="0 ; url = http://localhost/instituteproject/Login-Reg/records.php" />


<?php

    } else {
        echo "Failed to Update";
    }
}
?>