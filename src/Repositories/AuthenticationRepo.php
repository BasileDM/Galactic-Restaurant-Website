<?php

namespace src\Repositories;

function verifyEmailExists($username, $pdo) 
{
$query = $pdo->prepare("SELECT * FROM rest_admin WHERE username = :username");

$query->bindParam(':username', $username);

$query->execute();

}

function verifyEmailandPassword()
{
    
}