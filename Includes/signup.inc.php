<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["username"];
    $email = $_POST["username"];

    try {
        
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        //Error Handlers 
        $errors = []; 

        if(is_input_empty($username, $pwd, $email)){
            $errors["empty_input"] = "Fill in all fields";
        }
        if (is_email_invalid($email)){
            $errors["invalid_email"] = "Invalid email used!";
        }
        if (is_username_taken($pdo, $username)){
            $errors["username_taken"] = "Username already taken!";

        }
        if (is_email_registered($pdo, $email)){
            $errors["email_used"] = "Email already registered!";
        }
        require_once 'config_session .inc.php';

        if($erros){
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../LoginV3.php");
            die();
        }

    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage()); 
    }
} else {
    header("Location: ../LoginV3.php");
    die();
}