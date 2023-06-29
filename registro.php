<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
    <link href="css/normalize.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link href="css/styles.css" rel="stylesheet">
    </style>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="/proyecto/validar-registro.php">
        <h3>Registro de Cuenta</h3>

        <label for="username">Usuario</label>
        <input type="text" placeholder="Usuario" id="username" name="username">

        <label for="password">Contraseña</label>
        <input type="text" placeholder="Contraseña" id="password" name="password">

        <label for="confirm_password">Confirmar Contraseña</label>
        <input type="text" placeholder="Confirmar Contraseña" id="confirm_password" name="confirm_password">

        <input type="submit" value="Enviar" />
        <div id="respuesta" class="error-response">
            <?php
                if (isset($_GET['error'])){
                    echo htmlspecialchars($_GET['error']);
                }
            ?>
        </div>
    </form>
</body>

<script src="script.js"></script>

</html>