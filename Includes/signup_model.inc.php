<?php

declare(strict_types=1);

function get_username(object $pdo, string $username)
{
     $query = "SELECT username FROM user WHERE username = :username;";
     $stmt = $pdo->prepare($query);
     $stmt->blindparam(":username", $username);
     $stmt->execute();

     $result = $stmt->fetch(PDO::FETCH_ASSOC);
     return $result;
}

function get_email(object $pdo, string $email)
{
    $query = "SELECT username FROM user WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->blindparam(":email", $email);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}