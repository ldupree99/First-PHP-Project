<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>
    <h2>Login Form</h2>
    
<?php
    // Arrays
    $userCredentials = array(
        array("admin", "password123"),
        array("user", "userpass")
    );

    // Variables
    $username = "";
    $password = "";

    // Decision Structures
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $validCredentials = false;

        foreach ($userCredentials as $credential) {
            if ($username == $credential[0] && $password == $credential[1]) {
                $validCredentials = true;
                break;
            }
        }

        if ($validCredentials) {
            echo "Login successful!";
        } else {
            echo "Invalid login credentials. Please try again.";
        }
    }
?>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
