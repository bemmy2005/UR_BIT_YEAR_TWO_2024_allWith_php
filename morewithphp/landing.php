<?php
session_start();
//echo $user_id;
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

// Connect to database (replace dbname, username, password with actual credentials)
require_once "./connection/config.php";

$user_id = $_SESSION['user_id'];
//echo $user_id;
// Retrieve user's email from the database
$sql = "SELECT email FROM user WHERE id='$user_id'";
$result = $connection->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $email = $row['email'];
} else {
    $email = "Unknown";
}

$connection->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="master.css">
</head>
<body>

    <!-- You can add more content here -->
    <div class="navbar">
    <center><h2>Welcome <?php echo $email; ?></h2></center>
    <a class="active" href="landing.php">Home</a>
    <a href="write_message.php">Write a Message</a>
    <a href="update_profile.html">Update Profile</a>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>
