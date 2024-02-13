<?php

// Define a custom function to authenticate user credentials
function authenticateUser($inputUsername, $inputPassword, $validCredentials) {
    // Loop through each set of valid credentials
    foreach ($validCredentials as $credentials) {
        // Check if the entered username and password match any valid set
        if ($inputUsername == $credentials[0] && $inputPassword == $credentials[1]) {
            // Return true if credentials match
            return true;
        }
    }
    // Return false if no match is found
    return false;
}

// Check if the request method is POST (from submission)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve the entered username and password
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["pwd"]);

    // Define an array of valid username and password combinations
    $validCredentials = array(
        array("admin", "password123"),
        array("user", "userpass")
    );

    // Call the custom function to authenticate user credentials
    if (authenticateUser($username, $password, $validCredentials)) {
        // Display a message if login is successful
        echo "Login successful!";
    } else {
        // Display a message if login is unsuccessful
        echo "Invalid login credentials. Please try again.";
    }
}
?>
