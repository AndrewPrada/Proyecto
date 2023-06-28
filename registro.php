<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link href="styles.css" rel="stylesheet">
    </style>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="/laboratorio-2/validar-registro.php">
        <h3>Register</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Email or Phone" id="username" name="username">

        <label for="password">Password</label>
        <input type="text" placeholder="password" id="password" name="password">

        <label for="confirm_password">Confirm Password</label>
        <input type="text" placeholder="Confirm password" id="confirm_password" name="confirm_password">

        <input type="submit" value="Sign up" />
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