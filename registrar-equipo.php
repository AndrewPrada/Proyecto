<?php
// validar que el usuario este logeado
require_once('variables.php');
session_start();

if (!$_SESSION['usuario_logeado']){
    header("Location: index.php?error=Debes estar logeado para acceder a esta pagina");
}

$dbconn2 = pg_connect("host=localhost port=5432 dbname=$DATABASE user=$USER_DATABASE password=$USER_PASSWORD");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
    <link  rel="stylesheet" href="CSS/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap">
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <form class="form__register form__register--equipos" method="post" action="/registro/validar-equipo.php">
        <h4>Registro de Equipos</h4>
        <input class="controls" type="number" name="cbn" id="cbn" placeholder="Codigo de Bien Nacional">
        <input class="controls" type="text" name="equipo" id="equipo" placeholder="Marca / Nombre del Equipo">
        <input class="controls" type="text" name="tipo" id="tipo" placeholder="Clase de Equipo">
        <input class="controls" type="number" name="cantidad" id="cantidad" placeholder="Cantidad de equipos">
        <textarea class="controls controls--textarea" name="descripcion" id="descripcion" placeholder="Breve descripción del equipo"></textarea>

        <input class="btn" type="submit" value="Registrar Equipo">

        <p>¿No deseas crear un nuevo equipo? <a href="inventario.php">pulse Aquí</a></p>

        <div id="respuesta" class="error-response">
            <?php
                if (isset($_GET['error'])){
                    echo htmlspecialchars($_GET['error']);
                }
            ?>
        </div>
    </form>
</body>