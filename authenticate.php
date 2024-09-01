<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace these with your actual username and password
    $validUsername = "paresh";
    $validPassword = "1234";

    // Get user input
    $inputUsername = $_POST["username"];
    $inputPassword = $_POST["password"];

    // Check if the credentials are valid
    if ($inputUsername === $validUsername && $inputPassword === $validPassword) {
        // Set session variable to mark user as authenticated
        $_SESSION["authenticated"] = true;

        // Redirect to the admin page
        header("Location: admin.php");
        exit();
    } 
    
    else {
        // Invalid credentials, redirect back to the login page
        // echo "Invalid username and password";
        header("Location: login.php");
        
        exit();
    }
} else {
    // If the form is not submitted, redirect back to the login page
    header("Location: login.php");
    exit();
}
?>
