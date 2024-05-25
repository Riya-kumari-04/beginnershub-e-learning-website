<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Check if email already exists
    $check_query = "SELECT * FROM signup WHERE email = '$email'";
    $check_result = mysqli_query($con, $check_query);

    if(mysqli_num_rows($check_result) > 0){
        // Email already exists, show error message
        echo "<script>alert('Email already exists. Please use a different email.');</script>";
    } else {
        // Generate random token
        $token = bin2hex(random_bytes(16));

        // Insert user data with token into database
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $insertquery = "INSERT INTO signup (username, email, password, token) VALUES ('$name', '$email', '$hashed_password', '$token')";
        $res = mysqli_query($con, $insertquery);

        if($res){
            // Send verification email
            $to = $email;
            $subject = "Email Verification";
            $message = "Click the link below to verify your email:\n\n";
            $message .= "http://yourwebsite.com/verify.php?email=$email&token=$token";
            $headers = "From: yourname@example.com";

            if(mail($to, $subject, $message, $headers)){
                echo "<script>alert('Registration successful. Verification email sent.');</script>";
                echo "<script>window.location.href = 'verify.php?email=$email&token=$token';</script>";
            } else {
                echo "<script>alert('Failed to send verification email.');</script>";
            }
        } else {
            echo "<script>alert('Data not inserted');</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/beginners-hub/css/signup.css">
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1 class="title">Sign Up</h1>
            <div class="underline"></div>
            <form method="POST" action="">
                <div class="input-group">

                    <div class="input-feild namefield">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="username" placeholder="Name" required> <!-- Corrected name attribute -->
                    </div>

                    <div class="input-feild">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required> <!-- Corrected name attribute -->
                    </div>

                    <div class="input-feild">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="password" id="password" placeholder="Password" required> <!-- Corrected name attribute -->
                        <span toggle="#password" class="fa-solid fa-eye field-icon toggle-password"></span> <!-- Added eye icon to toggle password visibility -->
                    </div>
                    <p><span class="text"> Forgot Your Password</span><a href="#"> forgot</a></p>
                </div>
                <div class="btn-feild">
                    <input type="submit" name="submit" value="Sign Up" class="btn signupbtn"> <!-- Corrected name attribute -->
                </div>
            </form>
        </div>
    </div>
</body>
</html>

