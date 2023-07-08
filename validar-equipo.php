<?php
// validar que el usuario este logeado
require_once('variables.php');
session_start();

if (!$_SESSION['usuario_logeado']){
    header("Location: index.php?error=Debes estar logeado para acceder a esta pagina");
}

$dbconn2 = pg_connect("host=localhost port=5432 dbname=$DATABASE user=$USER_DATABASE password=$USER_PASSWORD");
// hacer la query de insercion del equipo en la base de datos

$cbn = $_POST['cbn'];
$equipo = $_POST['equipo'];
$tipo = $_POST['tipo'];
$cantidad = $_POST['cantidad'];
$descripcion = $_POST['descripcion'];
$fecha = date("d/m/y");

$pgResult = pg_query($dbconn2, "SELECT * FROM public.inventario WHERE cbn = '".$cbn."'");

$cb = pg_fetch_object($pgResult);

if ($cb->cbn === $cbn){
    $error = "Ya existe un equipo con este Codigo de Bien Nacional";
}
// retornar a la vista de inventario
if ($error){
    //se retorna a la pantalla del registro con el error
    header("Location: registar-equipo.php?error=$error");
} else{
    // se ejecuta la query que crea el usuario en base de datos
    $pgResult = pg_query($dbconn2, "INSERT INTO public.inventario (cbn, equipo, tipo, cantidad, descripcion, fecha) values('".$cbn."', '".$equipo."', '".$tipo."', '".$cantidad."', '".$descripcion."', '".$fecha."')");
    header("Location: inventario.php?exito=Se creo exitosamente");
}
?>