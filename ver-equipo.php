<?php
require_once('variables.php');
session_start();

if (!$_SESSION['usuario_logeado']){
    header("Location: index.php?error=Debes estar logeado para acceder a esta pagina");
}

$dbconn2 = pg_connect("host=localhost port=5432 dbname=$DATABASE user=$USER_DATABASE password=$USER_PASSWORD");

$idEquipo = $_GET['idEquipo'];

// query para obtener ese equipo en particular
$inventarioResult = pg_query($dbconn2, "SELECT * FROM public.inventario WHERE id = '".$idEquipo."'");

$inventario = pg_fetch_all($inventarioResult);

// muestro en pantalla el registro completo
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Equipos</title>
    <link href="css/normalize.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <?php
        foreach ($inventario as $i => $equipo) {
    ?>
    <main class="container container--ver">
        <h3 class="title centrar-texto"><?php echo $equipo['equipo']; ?></h3>
        <div class="ver">
            <p><span>CBN:</span> <?php echo $equipo['cbn']; ?></p>
            <p><span>equipo:</span> <?php echo $equipo['equipo']; ?></p>
            <p><span>tipo:</span> <?php echo $equipo['tipo']; ?></p>
            <p><span>cantidad:</span> <?php echo $equipo['cantidad']; ?></p>
            <p><span>descripción:</span> <?php echo $equipo['descripcion']; ?></p>
            <p><span>Cuando se registro:</span> <?php echo $equipo['fecha']; ?></p>
            <a href="inventario.php">Regresar a Inventario</a>
        </div>
    </main>
    <?php
        };
    ?>
</body>
</html>