<?php include '../header.php'; ?>

<?php
include './connection.php';

// Enquiry table -- Fetch
$enquiry_query = "SELECT * FROM enquiry_form"; // SQL fetch statement
$enquiry_data = mysqli_query($conn, $enquiry_query); // fire the querry
$enquiry_totalRows = mysqli_num_rows($enquiry_data);

// echo "Enquiry data: ";
// print_r($enquiry_result);   
// echo "<br>";


// User Registration table -- Fetch
$reg_users_query = "SELECT * FROM form"; // SQL fetch statement
$reg_users_data = mysqli_query($conn, $reg_users_query); // fire the querry
$reg_users_totalRows = mysqli_num_rows($reg_users_data);

// echo "User Reg data: ";
// print_r($reg_users_result);
// echo "<br>";
// print_r(mysqli_fetch_array($reg_users_data));


// Enrollment table -- Fetch
$enrollment_query = "SELECT * FROM enrollment_form"; // SQL fetch statement
$enrollment_data = mysqli_query($conn, $enrollment_query); // fire the querry
$enrollment_totalRows = mysqli_num_rows($enrollment_data);

// echo "Enrollment data: ";
// print_r($enrollment_result);
// echo "<br>";

?>

<!-- Enquiry table -->
<div class="p-3 text-center m-2">
    <h3 class="mb-4">Enquiry</h3>
    <table class="table w-75 mx-auto border">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Subject</th>
                <th scope="col">Email</th>
                <th scope="col">Messages</th>
            </tr>
        </thead>

        <tbody>

            <?php
            if ($enquiry_totalRows != 0) {
                while ($enquiry_result = mysqli_fetch_array($enquiry_data)) {
                    echo "
                        <tr>
                            <td>
                                " . $enquiry_result["id"] . "
                            </td>
                            <td>
                                " . $enquiry_result["name"] . "
                            </td>
                            <td>
                                " . $enquiry_result["subject"] . "
                            </td>
                            <td>
                                " . $enquiry_result["email"] . "
                            </td>
                            <td>
                                " . $enquiry_result["message"] . "
                            </td>

                            <td>
                            <a href='enquiry_update.php?id=$enquiry_result[id]'>
                                <input type='submit' value='Update' class='update'>
                            </a>

                            <a href='enquiry_delete.php?id=$enquiry_result[id]'>
                                <input type='submit' value='Delete' class='delete' onclick = 'checkdelete()'>
                            </a>
                        </td> 
                        </tr>
                    ";
                }
            } else {
                echo "No records found";
            }
            ?>

        </tbody>
    </table>
</div>

<hr class="mx-5">

<!-- Registration table -->
<div class="p-3 text-center m-2">
    <h3 class="mb-4">Registration</h3>
    <table class="table w-75 mx-auto border">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Image</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Password</th>
                <th scope="col">Confirm Password</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Caste</th>
                <th scope="col">Languages</th>
                <th scope="col">Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($reg_users_totalRows != 0) {
                while ($reg_users_result = mysqli_fetch_array($reg_users_data)) {
                    echo "
                        <tr>
                            <td>
                                " . $reg_users_result["id"] . "
                            </td>
                            <td>
                                <img src= " . $reg_users_result["std_image"] . " height='100px' width='100px' alt='user-img'>
                            </td>
                            <td>
                                " . $reg_users_result["fname"] . "
                            </td>
                            <td>
                                " . $reg_users_result["lname"] . "
                            </td>
                            <td>
                                " . $reg_users_result["password"] . "
                            </td>
                            <td>
                                " . $reg_users_result["cpassword"] . "
                            </td>
                            <td>
                                " . $reg_users_result["gender"] . "
                            </td>
                            <td>
                                " . $reg_users_result["email"] . "
                            </td>
                            <td>
                                " . $reg_users_result["phone"] . "
                            </td>
                            <td>
                                " . $reg_users_result["caste"] . "
                            </td>
                            <td>
                                " . $reg_users_result["language"] . "
                            </td>
                            <td>
                                " . $reg_users_result["address"] . "
                            </td>

                            <td>
                                <a href='./update_design.php?id=$reg_users_result[id]'>
                                    <input type='submit' value='Update' class='update'>
                                </a>

                                <a href='./delete.php?id=$reg_users_result[id]'>
                                    <input type='submit' value='Delete' class='delete' onclick = 'checkdelete()'>
                                </a>
                            </td> 
                        </tr>
                    ";
                }
            } else {
                echo "No records found";
            }

            ?>
            <script>
                function checkdelete() {
                    return confirm('Are you sure you want to Delete this record ?');
                }
            </script>
        </tbody>
    </table>
</div>

<hr class="mx-5">

<!-- Enrollment table -->
<div class="p-3 text-center m-2">
    <h3 class="mb-4">Enrollment</h3>
    <table class="table w-75 mx-auto border">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">First_Name</th>
                <th scope="col">Middle_name</th>
                <th scope="col">Last_Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Contact_No</th>
                <th scope="col">Email</th>
                <th scope="col">Course</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($enrollment_totalRows != 0) {
                while ($enrollment_result = mysqli_fetch_array($enrollment_data)) {
                    echo "
                        <tr>
                            <td>
                                " . $enrollment_result["id"] . "
                            </td>
                            <td>
                                " . $enrollment_result["firstName"] . "
                            </td>
                            <td>
                                " . $enrollment_result["middleName"] . "
                            </td>
                            <td>
                                " . $enrollment_result["lastName"] . "
                            </td>
                            <td>
                                " . $enrollment_result["gender"] . "
                            </td>
                            <td>
                                " . $enrollment_result["contact"] . "
                            </td>
                            <td>
                                " . $enrollment_result["email"] . "
                            </td>
                            <td>
                                " . $enrollment_result["course"] . "
                            </td>

                            <td>
                                <a href='../enrollment_update.php?id=$enrollment_result[id]'>
                                    <input type='submit' value='Update' class='update'>
                                </a>

                                <a href='../enrollment_delete.php?id=$enrollment_result[id]'>
                                    <input type='submit' value='Delete' class='delete' onclick = 'checkdelete()'>
                                </a>
                            </td> 
                        </tr>
                    ";
                }
            } else {
                echo "No records found";
            }
            ?>

        </tbody>
    </table>
</div>

<hr class="mx-5">

<?php include '../footer.php'; ?>