<?php
require_once("connect.php");

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize the input
    $message = mysqli_real_escape_string($connection, $_POST['message']);
    $sellerId = mysqli_real_escape_string($connection, $_POST['sellerId']);

    // Perform the necessary actions (e.g., store the message in a database)

    // Example: Insert the message into a messages table
    $userId = $_SESSION['user_id'];
    $insertQuery = "INSERT INTO chats (user_id, sendto, message) VALUES ('$userId', '$sellerId', '$message')";
    $result = mysqli_query($connection, $insertQuery);

    if ($result) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message: " . mysqli_error($connection);
    }
} else {
    // Handle invalid requests
    echo "Invalid request";
}
