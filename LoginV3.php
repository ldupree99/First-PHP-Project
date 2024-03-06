<?php
require_once 'Includes/config_session.inc.php';
require_once 'Includes/signup_view.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> Login </h3>

    <form action="Includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>
    </form>

    <h3> Signup </h3>

    <form action="Includes/signup.inc.php" method="post">
        <?php
       signup_inputs()
       ?> 
        <button>Signup</button>
    </form>

    <?php
    check_signup_errors();
    ?>
    
</body>
</html>