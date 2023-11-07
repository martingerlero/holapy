<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Starbucks</title>
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
                    <form action="../controlador/validarLogin.php" method="POST">
                        <p><i class="material-icons silver">person</i> Usuario:</p>
                        <p><input class="field-input validate" type="text" name="username" id="username" /></p>
                        <p><i class='material-icons silver'>lock</i> Clave:</p>
                        <p><input class='field-input validate' type="password" name="password" id="password" /></p>
                        <p><button class='btn green darken-1' type="submit" value="Login">Iniciar sesi&oacute;n</button></p>
                    </form>
                </div>
        </div>
    </center>
    </body>
</html>
