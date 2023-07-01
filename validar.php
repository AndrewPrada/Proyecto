<?php
    // estos son los datos de la base de datos
    $DATABASE = "laboratorio";
    $USER_DATABASE = "postgres";
    $USER_PASSWORD = "Avp1907.";

    // coneccion a la base de datos
    $dbconn2 = pg_connect("host=localhost port=5432 dbname=$DATABASE user=$USER_DATABASE password=$USER_PASSWORD");

    // variables enviadas por el usuario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // hacemos la query para tomar el usuario de la base de datos
    $pgResult = pg_query($dbconn2, "SELECT * FROM public.usuarios WHERE usuario = '".$username."'");

    // convertimos el resultado a un objeto de php (stdClass)
    $usuario = pg_fetch_object($pgResult);

    // comparamos la clave enviada por el usuario con la guardada en la base de datos
    if ($usuario->clave === $password) { 
        session_start(); 
        $_SESSION['usuario_logeado'] = $usuario->id;
        header("Location: inventario.php");
    } else {
        header("Location: index.php?error=La clave ingresada es incorrecta");
    }
?>