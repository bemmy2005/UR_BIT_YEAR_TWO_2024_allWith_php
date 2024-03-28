<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to database (replace dbname, username, password with actual credentials)
    $connection = new mysqli("localhost", "root", "", "mytest");

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sender_id = $_SESSION['user_id'];
    $receiver_id = $_POST['receiver_id'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];

    // Insert the message into the database
    $sql = "INSERT INTO message (senderid, receiverid, subject, content)
            VALUES ('$sender_id', '$receiver_id', '$subject', '$content')";

    if ($connection->query($sql) === TRUE) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message: " . $connection->error;
    }

    $connection->close();
}
?>
