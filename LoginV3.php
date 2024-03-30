<?php
require_once 'Includes/config_session.inc.php';
require_once 'Includes/signup_view.inc.php';
require_once 'Includes/login_view.inc.php';
require_once 'Includes/footer_links.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h3> 
        <?php
        output_username();
        ?>
     </h3>

<?php
    if (!isset($_SESSION["user_id"]))  
{?>
    <h3> Login </h3>

    <form action="Includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>
    </form>
<?php } ?>

<?php
check_login_errors();
?>
    <h3> Signup </h3>

    <form action="Includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder= "E-Mail">
        <button>Signup</button>
    </form>

    <?php
    check_signup_errors();
    ?>
    <h3> Logout
    <form action="Includes/logout.inc.php" method="post">
        <button>Logout</button>
    </form>

        <br>
        <br>
        <br>
        <h3>Change account</h3>
    <form action="Includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="text" name="email" placeholder="E-Mail">
        <button>Update</button>
    </form>

    <!-- Footer section -->
    <div id="footer-links">
    <?php foreach ($footerLinks as $category => $links): ?>
        <div class="footer-category">
            <h4><?php echo $category; ?></h4>
            <ul>
                <?php foreach ($links as $link): ?>
                    <li><a href="<?php echo $link['url']; ?>"><?php echo $link['name']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</div>


</body>
</html>
