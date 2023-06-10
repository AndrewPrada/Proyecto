<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo nl2br("username $username \n");
    echo nl2br("password $password");


    if ($username === 'jorge' && $password === "123"){
        header("Location: inventario.html");
        die;
    } else{
        header("Location: login.html");
        die;
    }
?>