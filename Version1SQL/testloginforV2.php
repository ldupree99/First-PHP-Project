<?php
function checkCredentials($inputUsername, $inputPassword, $validCredentials) {
    foreach ($validCredentials as $credentials) {
        if ($inputUsername == $credentials[0] && $inputPassword == $credentials[1]) {
            return true;
        }
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["pwd"]);

    $validCredentials = array(
        array("admin", "password123"),
        array("user", "userpass")
    );

    if (checkCredentials($username, $password, $validCredentials)) {
        echo "Login successful!";
    } else {
        echo "Invalid login credentials. Please try again.";
    }
}
