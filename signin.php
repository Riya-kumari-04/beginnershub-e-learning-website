<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/beginners-hub/css/signin.css"> <!-- Make sure this path is correct -->
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h1 class="title">Sign In</h1>
            <div class="underline"></div>
            <form method="POST" action="/beginners-hub/courses.php"> <!-- Corrected action attribute -->
                <div class="input-group">
                    <div class="input-feild">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required> <!-- Added name attribute -->
                    </div>
                    <div class="input-feild">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="password" placeholder="Password" required> <!-- Added name attribute -->
                    </div>
                    <p><span class="text">Don't have an account?</span> <a href="signup.php">New User</a></p>
                </div>
                <div class="btn-feild">
                    <input type="submit" name="submit" value="Sign In" class="btn signinbtn"> <!-- Added name attribute -->
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
include 'connection.php';
session_start();

if(isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Retrieve user data from database based on email
    $sql = "SELECT * FROM signup WHERE email='$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];

        // Verify password
        if (password_verify($password, $storedPassword)) {
            // Password is correct, start session
            $_SESSION['username'] = $row['username'];
            header("Location: dashboard.php"); // Redirect to dashboard or any other page after successful login
            exit();
        } else {
            // Incorrect password
            ?>
            <script>
                alert("Incorrect email or password.");
            </script>
            <?php
        }
    } else {
        // User does not exist
        ?>
        <script>
            alert("User does not exist.");
        </script>
        <?php
    }
}
?>