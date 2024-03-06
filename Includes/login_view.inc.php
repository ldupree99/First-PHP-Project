<?php

declare(strict_types=1);

//when logged thic function will show user their own data

function output_username()
{
    if(isset($_SESSION["user_id"])) {
        echo "You are logged in as " . $_SESSION["user_username"];
    } else {
        echo "You are not logged in";
    }
}
function check_login_errors()
{
    if(isset($_SESSION["errors_login"])){
        $errors = $_SESSION["errors_login"];

        echo "<br>";

        foreach ($errors as $error){
            echo '<p class="form-error">' . $error . '</p>';
        }

        unset($_SESSION["errors_login"]);

    }
    //send user back with success messege
    else if (isset($_GET['login']) && $_GET['login'] === "success"){

    }
}
