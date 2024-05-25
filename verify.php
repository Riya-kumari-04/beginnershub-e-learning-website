<?php
include 'connection.php';

if(isset($_GET['email']) && isset($_GET['token'])){
    $email = mysqli_real_escape_string($con, $_GET['email']);
    $token = mysqli_real_escape_string($con, $_GET['token']);

    // Check if the email and token match in the database
    $check_query = "SELECT * FROM signup WHERE email = '$email' AND token = '$token' AND status = 0";
    $check_result = mysqli_query($con, $check_query);

    if(mysqli_num_rows($check_result) > 0){
        // Update user's status to verified
        $update_query = "UPDATE signup SET status = 1 WHERE email = '$email'";
        mysqli_query($con, $update_query);

        ?>
        <script>
            alert("Email verification successful. You can now log in.");
            window.location.href = "signin.php"; // Redirect to login page
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Invalid verification link.");
            window.location.href = "signup.php"; // Redirect to homepage or registration page
        </script>
        <?php
    }
} else {
    ?>
    <script>
        alert("Invalid verification link.");
        window.location.href = "signup.php"; // Redirect to homepage or registration page
    </script>
    <?php
}
?>
