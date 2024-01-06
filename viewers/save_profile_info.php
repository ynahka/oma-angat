<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect or handle unauthorized access
    header("Location: ../buyer/login.php");
    exit();
}

// Include database connection code or use your existing connection
include("connect.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract form data
    $userId = $_SESSION['user_id'];
    $name = $_POST['name'];
    $email = $_POST['email']; // This is the email to be updated in the user_details table

    // Handle profile image upload (if provided)
    $profileImageName = ""; // Initialize variable to store the image file name

    if ($_FILES['profile_image']['name']) {
        $targetDir = "uploads/"; // Specify the directory to store uploaded files
        $profileImageName = $targetDir . basename($_FILES['profile_image']['name']);

        // Move uploaded file to the specified directory
        if (move_uploaded_file($_FILES['profile_image']['tmp_name'], $profileImageName)) {
            // File uploaded successfully
        } else {
            // Handle file upload error
            echo "Error uploading profile image.";
            exit();
        }
    }

    // Update user name in the users_table
    $updateUsersTableQuery = "UPDATE users_table SET username = '$name' WHERE user_id = '$userId'";
    if (!mysqli_query($connection, $updateUsersTableQuery)) {
        // Handle database error
        echo "Error updating users_table: " . mysqli_error($connection);
        exit();
    }

    // Update profile image and email in the user_details table
    $updateUserDetailsQuery = "UPDATE user_details SET profile_image = '$profileImageName', email = '$email' WHERE user_id = '$userId'";
    if (mysqli_query($connection, $updateUserDetailsQuery)) {
        // Update successful
        echo "Profile information updated successfully.";
    } else {
        // Handle database error
        echo "Error updating user_details: " . mysqli_error($connection);
    }
} else {
    // Redirect or handle unauthorized access if the form is not submitted
    header("Location: login.php");
    exit();
}

// Close the database connection
mysqli_close($connection);
