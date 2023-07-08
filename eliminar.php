<?php
require_once('variables.php');
session_start();

if (!$_SESSION['usuario_logeado']){
    header("Location: index.php?error=Debes estar logeado para acceder a esta pagina");
}

$dbconn2 = pg_connect("host=localhost port=5432 dbname=$DATABASE user=$USER_DATABASE password=$USER_PASSWORD");

$idEquipo = $_GET['idEquipo'];

$pgResult = pg_query($dbconn2, "DELETE FROM public.inventario WHERE id = '".$idEquipo."'");
header("Location: inventario.php?exito=Se elimino exitosamente");
?>