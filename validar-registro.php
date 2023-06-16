<?php

$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];

$errorUsername = "no";
$errorPassword = "no";
$errorConfirmPassword = "no";
$errorDifferentePasswords = "no";

if (esStringVacia($username)){
    $errorUsername = "si";
}

if (esStringVacia($password)){
    $errorPassword = "si";
}

if (esStringVacia($confirmPassword)){
    $errorConfirmPassword = "si";
}

if ($password !== $confirmPassword){
    $errorDifferentePasswords = "si";
}


if (esStringVacia($username) || esStringVacia($password) || esStringVacia($confirmPassword) || $password !== $confirmPassword){
    header("Location: registro.html?username=" . $errorUsername . "&password=" . $errorPassword . "&confirmPassword=" . $errorConfirmPassword . "&diffPasswords=" . $errorDifferentePasswords);
} else {
    header("Location: login.html?respuesta=exitoso");
}

function esStringVacia($texto){
    if (empty($texto)){ // null o ''
        return true;
    }

    if (ctype_space($texto)){ // '    '
        return true;
    }

    return false;
}
