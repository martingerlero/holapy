<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Registrar Usuario - HolaPy</title>
        <link rel="stylesheet" href="../static/css/materialize.min.css">
        <script src="../static/js/materialize.min.js"></script>
        <link href=https://fonts.googleapis.com/icon?family=Material+Icons rel=stylesheet />
    </head>
    <body background="../img/fondo_login.jpg">
    <center>
        <div class='card white z-depth-3' style="padding: 5px; width: 600px; opacity: 0.8; border-radius: 25px;">
            <p class=center><img src="../img/logo_login.png" alt='Starbucks' width="50%" height="50%" /></p>
            <p style="color: #b9151b"><?=$_SESSION['mensaje']?></p>
                <div class='card-content'> 
                    <p>Complete el siguiente formulario para registrarse</p><br>
                    <form action="" method="POST">
                        <p><i class="material-icons silver">person</i> Email:</p>
                        <p><input class="field-input validate" type="text" name="email" id="email" /></p>
                        <p><i class='material-icons silver'>lock</i> Contraseña:</p>
                        <p><input class='field-input validate' type="password" name="password1" id="password" /></p>
                        <p><i class='material-icons silver'>lock</i>Repetir Contraseña:</p>
                        <p><input class='field-input validate' type="password" name="password2" id="password" /></p>
                        <p><button class='btn purple darken-1' type="submit" value="Registrar">Registrarme</button></p>
                    </form>
                </div>
        </div>
    </center>
    </body>
</html>
