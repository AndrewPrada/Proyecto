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
  <!-- Design by foolishdeveloper.com -->
  <title>Sistema de Inventario</title>
  <link href="css/normalize.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <!--Stylesheet-->
  <link href="css/styles.css" rel="stylesheet">
</head>

<body>
  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <div class="container">
    <div class="header">
      <div>
        Hola, <?php echo($username) ?>
      </div>
      <div><a href="logout.php">Cerrar sesion</a></div>
    </div>
    <h1>Inventario</h1>
    <table>
      <thead>
        <tr>
          <th width="350">Item</th>
          <th width="100">Tipo</th>
          <th width="100">Cantidad</th>
          <th width="250">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach ($inventario as $i => $equipo) {
        ?>
            <tr>
              <td> <?php echo $equipo['equipo'] ?> </td>
              <td> <?php echo $equipo['tipo'] ?> </td>
              <td> <?php echo $equipo['cantidad'] ?> </td>
              <td>
                <a class="btn" href="ver-equipo.php?idEquipo=<?php echo $equipo['id'] ?>">Ver</button>
                <button class="btn">Eliminar</button>
              </td>
            </tr>
        <?php 
          }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>