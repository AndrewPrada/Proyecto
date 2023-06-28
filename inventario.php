<?php
  session_start();

  // chequeamos la sesion, si el usuario NO esta logeado, se retgorna al login
  if (!$_SESSION['usuario_logeado']){
    header("Location: login.php");
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Design by foolishdeveloper.com -->
  <title>Glassmorphism login Form Tutorial in html css</title>

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
  <!--Stylesheet-->
  <link href="styles.css" rel="stylesheet">
</head>

<body>
  <div class="background">
    <div class="shape"></div>
    <div class="shape"></div>
  </div>
  <div class="container">
    <div class="header">
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