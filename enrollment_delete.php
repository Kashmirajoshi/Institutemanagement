<?php
include("./Login-Reg/connection.php");
$id = $_GET['id'];
$query = "DELETE FROM enrollment_form WHERE id = '$id'";
$data = mysqli_query($conn, $query);

if ($data) {
    echo "<script>alert('Record Deleted') </script>";
?>
    <meta http-equiv="refresh" content="0 ; url = http://localhost/instituteproject/Login-Reg/records.php" />

<?php
} else {
    echo "<script>alert('Failed to Deleted')</script>";
}
?>