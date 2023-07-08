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
    <form class="form__register" method="post" action="/registro/validar.php">
        <h4>Inicio de Sesión</h4>
        <input class="controls" type="text" name="username" id="username" placeholder="Ingrese su Usuario">
        <input class="controls" type="password" name="password" id="password" placeholder="Ingrese una Contraseña">
        <input class="btn" type="submit" value="Iniciar Sesión">

        <p>¿No tienes cuenta? <a href="registro.php">Pulse Aquí</a></p>

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
    </form>
</body>
</html>