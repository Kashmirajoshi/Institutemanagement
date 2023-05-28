<?php include("./Login-Reg/connection.php");

$id = $_GET['id'];
$query = "SELECT * FROM enrollment_form WHERE id = '$id'";
$data = mysqli_query($conn, $query);
// $total = mysqli_num_rows($data);
($result = mysqli_fetch_assoc($data));
print_r($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FavIcon -->
    <link rel="icon" href="./IPimages/vitplain.jpeg" />
    <title>Enrollment Form</title>
    <link rel="stylesheet" href="./enrollment_form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<style media="screen">
    input::-webkit-inner-spin-button,
    input::-webkit-outer-spin-button {
        -webkit-appearance: none;
    }
</style>

<body>

    <div class="main_div">

        <form method="post">

            <div class=" input_group">

                <!-- <label for="name"><i class="fa-solid fa-user"></i>  First Name :-</label> -->
                <input type="text" name='fname' value="<?php echo $result['firstName']; ?>" id="first_name" placeholder="Enter Your First Name" required>
                <p id="first_user" style="color: red;"></p>

            </div>

            <div class="input_group">

                <!-- <label for="name"><i class="fa-solid fa-user"></i>  Middle Name :-</label> -->
                <input type="text" name='mname' value="<?php echo $result['middleName']; ?>" id="second_name" placeholder="Enter Your Middle Name" required>
                <p id="middle_user" style="color: red;"></p>

            </div>

            <div class="input_group">

                <!-- <label for="name"><i class="fa-solid fa-user"></i>  Last Name :-</label> -->
                <input type="text" name='lname' value="<?php echo $result['lastName']; ?>" id="last_name" placeholder="Enter Your Last Name" required>
                <p id="last_user" style="color: red;"></p>

            </div>

            <div class="input_group">

                <!-- <label for="name">Select Your Course :-</label> -->
                <select name="gender">
                    <!-- <option value="C">Select Your Course</option> -->
                    <option value="--">Select Your Gender</option>

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
                                            ?>>Others</option>

                </select>

            </div>

            <div class="input_group">

                <!-- <label for="name"><i class="fa-solid fa-phone-square-alt"></i>  Mobile Number :-</label> -->
                <input type="number" min='0' maxlength="10" name='contactNo' value="<?php echo $result['contact']; ?>" id="mobile" placeholder="Enter Your Mobile Number" required>
                <p id="mob_numb" style="color: red;"></p>

            </div>

            <div class="input_group">

                <!-- <label for="name"><i class="fa-solid fa-envelope"></i>  Email Id :-</label> -->
                <input type="email" name='email' value="<?php echo $result['email']; ?>" id="email_id" placeholder="Enter Your Email Id" required>
                <p id="mail_id" style="color: red;"></p>

            </div>

            <div class="input_group">

                <!-- <label for="name">Select Your Course :-</label> -->
                <select name="course">
                    <!-- <option value="C">Select Your Course</option> -->
                    <option value="--">Select Your Course</option>
                    <option value="Full Stack Web Developer" <?php
                                                                if ($result['course'] == 'Full Stack Web Developer') {
                                                                    echo "selected";
                                                                }
                                                                ?>>Full Stack Web Developer</option>

                    <option value="Software Testing" <?php
                                                        if ($result['course'] == 'Software Testing') {
                                                            echo "selected";
                                                        }
                                                        ?>>Software Testing</option>

                    <option value="C" <?php
                                        if ($result['course'] == 'C') {
                                            echo "selected";
                                        }
                                        ?>>C</option>

                    <option value="C++" <?php
                                        if ($result['course'] == 'C++') {
                                            echo "selected";
                                        }
                                        ?>>C++</option>

                    <option value="HTML" <?php
                                            if ($result['course'] == 'HTML') {
                                                echo "selected";
                                            }
                                            ?>>HTML</option>

                    <option value="CSS" <?php
                                        if ($result['course'] == 'CSS') {
                                            echo "selected";
                                        }
                                        ?>>CSS</option>

                    <option value="JavaScript" <?php
                                                if ($result['course'] == 'JavaScript') {
                                                    echo "selected";
                                                }
                                                ?>>JavaScript</option>

                    <option value="PHP" <?php
                                        if ($result['course'] == 'PHP') {
                                            echo "selected";
                                        }
                                        ?>>PHP</option>

                    <option value="NodeJS" <?php
                                            if ($result['course'] == 'NodeJS') {
                                                echo "selected";
                                            }
                                            ?>>NodeJS</option>

                    <option value="ReactJS" <?php
                                            if ($result['course'] == 'ReactJS') {
                                                echo "selected";
                                            }
                                            ?>>ReactJS</option>

                    <option value="MySQL" <?php
                                            if ($result['course'] == 'MySQL') {
                                                echo "selected";
                                            }
                                            ?>>MySQL</option>

                    <option value="MongoDB" <?php
                                            if ($result['course'] == 'MongoDB') {
                                                echo "selected";
                                            }
                                            ?>>MongoDB</option>

                    <option value="Python" <?php
                                            if ($result['course'] == 'Python') {
                                                echo "selected";
                                            }
                                            ?>>Python</option>

                    <option value="Other" <?php
                                            if ($result['course'] == 'Other') {
                                                echo "selected";
                                            }
                                            ?>>Other</option>

                </select>

            </div>

            <input type="submit" name="update" value="Update">

        </form>

    </div>

    <script>
        let firstname = document.getElementById("first_name")
        let middlename = document.getElementById("second_name")
        let lastname = document.getElementById("last_name")
        let mobnumb = document.getElementById("mobile")
        let mailid = document.getElementById("email_id")
        let formsubmit = 1

        function submit() {
            if (firstname.value = "") {
                document.getElementById("first_user").innerHTML = "Please Fill Your First Name"
                formsubmit = 0
            } else {
                document.getElementById("first_user").innerHTML = ""
                formsubmit = 1
            }

            if (middlename.value = "") {
                document.getElementById("middle_user").innerHTML = "Please Fill Your Middle Name"
                formsubmit = 0
            } else {
                document.getElementById("middle_user").innerHTML = ""
                formsubmit = 1
            }

            if (lastename.value = "") {
                document.getElementById("last_user").innerHTML = "Please Fill Your Middle Name"
                formsubmit = 0
            } else {
                document.getElementById("last_user").innerHTML = ""
                formsubmit = 1
            }

            if (mobnumb.value = "") {
                document.getElementById("mob_numb").innerHTML = "Please Fill Your Mobile Number"
                formsubmit = 0
            } else if (mobnumb.value.length < 10) {
                document.getElementById("mob_numb").innerHTML = "Invalid Mobile Number"
                formsubmit = 0
            } else {
                document.getElementById("mob_numb").innerHTML = ""
                formsubmit = 1
            }

            if (mailid.value == "") {
                document.getElementById("mail_id").innerHTML = "Please Enter Your Mail Address"
                formsubmit = 0
            } else if (mailid.value.match((/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]$/))) {
                document.getElementById("mail_id").innerHTML = "Please Enter Valid Email Address"
                formsubmit = 0
            } else {
                document.getElementById("mail_id").innerHTML = ""
                formsubmit = 1
            }

            if (formsubmit == 0) {
                return false
            } else {
                return true
            }

        }

        let accept = () => {
            alert("Inquiery Form Submitted Successfully")
        }
    </script>

    <?php require './enroll_crud.php' ?>

</body>

</html>

<?php
if ($_POST['update']) {

    $fname   = $_POST['fname'];
    $mname   = $_POST['mname'];
    $lname   = $_POST['lname'];
    $gender  = $_POST['gender'];
    $contactNo = $_POST['contactNo'];
    $email     = $_POST['email'];
    $course = $_POST['course'];

    $query = "UPDATE enrollment_form SET 'firstName'='$fname', 'middleName'='$mname', 'lastName'='$lname', gender='$gender', contact='$contactNo', email='$email', course='$course' WHERE id = '$id'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Enrollment Record Updated') </script>";

?>

        <meta http-equiv="refresh" content="0 ; url = http://localhost/instituteproject/Login-Reg/records.php" />

<?php

    } else {
        echo "Failed to Update Enrollment";
    }
}
?>