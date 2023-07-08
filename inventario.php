<?php
require_once('variables.php');
session_start();

// chequeamos la sesion, si el usuario NO esta logeado, se retgorna al login
if (!$_SESSION['usuario_logeado']){
    header("Location: index.php?error=Debes estar logeado para acceder a esta pagina");
}

// coneccion a la base de datos
$dbconn2 = pg_connect("host=localhost port=5432 dbname=$DATABASE user=$USER_DATABASE password=$USER_PASSWORD");

// hacemos la query para tomar el usuario de la base de datos
$pgResult = pg_query($dbconn2, "SELECT * FROM public.usuarios WHERE id = '".$_SESSION['usuario_logeado']."'");

// convertimos el resultado a un objeto de php (stdClass)
$usuario = pg_fetch_object($pgResult);

$username = $usuario->usuario;

$inventarioResult = pg_query($dbconn2, "SELECT * FROM public.inventario");

$inventario = pg_fetch_all($inventarioResult);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario</title>
    <link  rel="stylesheet" href="CSS/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet"href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap">
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div>
                Hola <?php echo($username) ?>
            </div>
            <div><a href="logout.php">Cerrar sesion</a></div>
        </div>

        <h1>Inventario</h1>

        <table>
            <thead>
                <tr>
                    <th>CBN</th>
                    <th>Item</th>
                    <th>Tipo</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($inventario as $i => $equipo) {
                ?>
                <tr>
                    <td> <?php echo $equipo['cbn'] ?> </td>
                    <td> <?php echo $equipo['equipo'] ?> </td>
                    <td> <?php echo $equipo['tipo'] ?> </td>
                    <td> <?php echo $equipo['cantidad'] ?> </td>
                    <td>
                        <a class="btn" href="ver-equipo.php?idEquipo=<?php echo $equipo['id'] ?>">Ver</a>
                        <a class="btn" href="eliminar.php?idEquipo=<?php echo $equipo['id'] ?>">Eliminar</a>
                    </td>
                </tr>
                <?php 
                }
                ?>
            </tbody>
        </table>
        <a href="registrar-equipo.php">Registrar Equipos</a>
    </div>
</body>
</html>