<?php
  session_start();

  // chequeamos la sesion, si el usuario NO esta logeado, se retgorna al login
  if (!$_SESSION['usuario_logeado']){
    header("Location: index.php?error=Debes estar logeado para acceder a esta pagina");
  }

  // estos son los datos de la base de datos
  $DATABASE = "laboratorio";
  $USER_DATABASE = "postgres";
  $USER_PASSWORD = "jorge31588";

  // coneccion a la base de datos
  $dbconn2 = pg_connect("host=localhost port=5432 dbname=$DATABASE user=$USER_DATABASE password=$USER_PASSWORD");

  // hacemos la query para tomar el usuario de la base de datos
  $pgResult = pg_query($dbconn2, "SELECT * FROM public.usuarios WHERE id = '".$_SESSION['usuario_logeado']."'");

  // convertimos el resultado a un objeto de php (stdClass)
  $usuario = pg_fetch_object($pgResult);

  $username = $usuario->usuario;
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
          <th width="50">CBN</th>
          <th width="350">Item</th>
          <th width="100">Tipo</th>
          <th width="100">Cantidad</th>
          <th width="250">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>514</td>
          <td>Monitor AOC 27"</td>
          <td>Periferico</td>
          <td>5</td>
          <td>
            <button class="btn">Ver</button>
            <button class="btn">Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>126</td>
          <td>Computadora de escritorio I7, 8GB Ram</td>
          <td>Computador</td>
          <td>2</td>
          <td>
            <button class="btn">Ver</button>
            <button class="btn">Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>635</td>
          <td>Mouse inalambrico Logitech</td>
          <td>Periferico</td>
          <td>22</td>
          <td>
            <button class="btn">Ver</button>
            <button class="btn">Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>106</td>
          <td>Mouse alambrico Logitech</td>
          <td>Periferico</td>
          <td>4</td>
          <td>
            <button class="btn">Ver</button>
            <button class="btn">Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>643</td>
          <td>Teclado Logitech</td>
          <td>Periferico</td>
          <td>42</td>
          <td>
            <button class="btn">Ver</button>
            <button class="btn">Eliminar</button>
          </td>
        </tr>
        <tr>
          <td>643</td>
          <td>Laptop Toshiba 13", I3, 4GB Ram</td>
          <td>Periferico</td>
          <td>2</td>
          <td>
            <button class="btn">Ver</button>
            <button class="btn">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html>