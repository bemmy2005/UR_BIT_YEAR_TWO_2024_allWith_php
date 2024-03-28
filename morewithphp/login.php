<?php
session_start();

// Connect to database (replace dbname, username, password with actual credentials)
require_once "./connection/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email='$email'";
    $result = $connection->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id']; // Set the user_id session variable
            header("Location: landing.php");
            exit();
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "User not found.";
    }
}

$connection->close();
?>
