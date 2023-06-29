<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Sistema de Inventario - Inicio de Sesión</title>
    <link href="css/normalize.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="/proyecto/validar.php">
        <h3>Inicio de Sesión</h3>

        <label for="username">Usuario</label>
        <input type="text" placeholder="Usuario" id="username" name="username">

        <label for="password">Contraseña</label>
        <input type="password" placeholder="Contraseña" id="password" name="password">

        <input type="submit" value="Iniciar Sesión" />

        <div class="error-response">
            <?php
                if (isset($_GET['error'])){
                    echo htmlspecialchars($_GET['error']);
                }
            ?>
        </div>
        <div class="success-response">
            <?php
                if (isset($_GET['exito'])){
                    echo htmlspecialchars($_GET['exito']);
                }
            ?>
        </div>
        <br>
        <div>
            <a href="/proyecto/registro.php">Registrarse</a>
        </div>
    </form>
</body>
</html>
