<?php
// estos son los datos de la base de datos
$DATABASE = "laboratorio";
$USER_DATABASE = "postgres";
$USER_PASSWORD = "jorge31588";

// coneccion a la base de datos
$dbconn2 = pg_connect("host=localhost port=5432 dbname=$DATABASE user=$USER_DATABASE password=$USER_PASSWORD");

$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];


// hacemos la query para tomar el usuario de la base de datos
$pgResult = pg_query($dbconn2, "SELECT * FROM public.usuarios WHERE usuario = '".$username."'");

// convertimos el resultado a un objeto de php (stdClass)
$usuario = pg_fetch_object($pgResult);

if ($password !== $confirmPassword){
    $error = "Las claves no coinciden";
}

// validamos si ya existe el usuario
if ($usuario->usuario === $username){
    $error = "Ya existe un usuario con este nombre";
}

if ($error){
    //se retorna a la pantalla del registro con el error
    header("Location: registro.php?error=$error");
} else{
    // se ejecuta la query que crea el usuario en base de datos
    $pgResult = pg_query($dbconn2, "INSERT INTO public.usuarios (usuario, clave) values('".$username."', '".$password."')");
    header("Location: index.php?exito=Se creo el usuario exitosamente");
}
?>