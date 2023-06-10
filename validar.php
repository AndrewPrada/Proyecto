<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo nl2br("username $username \n");
    echo nl2br("password $password");


    if ($username === 'jorge' && $password === "123"){
        header("Location: inventario.html");
        die;
    }else if ($username === 'orlenys' && $password === "234"){
        header("Location: inventario.html");
        die;
    }else if ($username === 'Andrew' && $password === '567'){
        header("Location: inventario.html");
        die;
    }else if ($username === 'jose' && $password === "334"){
        header("Location: inventario.html");
        die;
    }else{
        header("Location: login.html");
        die;
    }
?>