<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FavIcon -->
    <link rel="icon" href="../IPimages/vitplain.jpeg" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="login_style.css">
    <title>Login</title>
</head>

<body class="bg-info-subtle">
    <div class="center">
        <h1>Login</h1>

        <div class="form">
            <input type="text" name="username" class="textfield " placeholder="Username/Email" required>
            <input type="password" name="password" class="textfield " placeholder="Password" required>

            <div class="forgetpass"><a href="#" class="link">Forget Password?</a></div>


            <input type="submit" name="login" value="Login" class="button">

            <div class="signup">New Member ?<a href="./form.php" class="link">Signup Here</a> </div>
        </div>
    </div>
</body>

</html>

<?php
include("./connection.php");
require_once '../vendor/autoload.php';

use Firebase\JWT\JWT;

// Check if the form is submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
    
    // Sanitize user inputs to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    echo $username;

    // Query the database for user matching the provided credentials
    $query = "SELECT * FROM form WHERE email='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Generate JWT token
        $secret_key = "your_secret_key";
        $payload = array(
            "username" => $username
        );
        $token = JWT::encode($payload, $secret_key, 'HS256');

        // Set the token in a cookie
        setcookie("jwt", $token, time() + (60 * 60), "/"); // Cookie expiration time: 1 hour

        // Redirect to the dashboard or any other authenticated page
        header('Location: dashboard.php');
    } else {
        echo "Invalid username or password";
    }
}
?>