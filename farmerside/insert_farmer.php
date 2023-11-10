<?php
// Include your database connection file
include("../connection/connection.php");

if (isset($_POST['submit'])) {
    // Validate and sanitize user inputs
    $farmer_name = mysqli_real_escape_string($conx, $_POST['farmer_name']);
    $email = mysqli_real_escape_string($conx, $_POST['email']);
    $Address = mysqli_real_escape_string($conx, $_POST['Address']);
    $Phone_Num = mysqli_real_escape_string($conx, $_POST['Phone_Num']);

    // File upload handling
    if (isset($_FILES['image'])) {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];

        // You may want to add further validation on the uploaded image here
        // Ensure it's an image file and meets your size requirements

        // Store the uploaded image in a folder
        $upload_directory = "Res_img/"; // Adjust the path as needed
        $target_file = $upload_directory . $file_name;

        if (move_uploaded_file($file_tmp, $target_file)) {
            // File was successfully uploaded
            $image = $target_file;
        } else {
            // Error handling for file upload failure
            echo "Error uploading the image.";
            exit;
        }
    }

    // Insert data into the Farmer table
    $insert_query = "INSERT INTO farmer (user_id, farmer_name, email, Address, Phone_Num, image) 
                     VALUES ('$user_id', '$farmer_name', '$email', '$Address', '$Phone_Num', '$image')";

    if (mysqli_query($conx, $insert_query)) {
        // Data insertion was successful
        echo "Data inserted successfully";
    } else {
        // Data insertion failed
        echo "Error: " . mysqli_error($conx);
    }

    // Close the database connection
    mysqli_close($conx);
}
?>
