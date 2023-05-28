<?php
require_once '../vendor/autoload.php';

use Firebase\JWT\JWT;

// Check if the JWT token is present in the cookie
if (isset($_COOKIE['jwt'])) {
    $token = $_COOKIE['jwt'];
    $secret_key = "your_secret_key";

    try {
        // Verify and decode the JWT token
        $decoded = JWT::decode($token, $secret_key, array('HS256'));
        $username = $decoded->username;
    } catch (Exception $e) {
        header('Location: login.php');
    }
} else {
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h1>Welcome, <?php echo $username; ?></h1>
    <a href="logout.php">Logout</a>
</body>

</html>