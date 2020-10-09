<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:login.php");
} elseif ($_SESSION['rol'] == 2) {
    header("Location:index.php");
}
?>
<html lang="es">

<head>
    <link rel="stylesheet" href="css/log-reg.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar estilista</title>
    <link rel="icon" href="images/icon.png" type="image/png" />
    <script src="https://kit.fontawesome.com/3307f97461.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="./MyStyle/images/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
            MyStyle
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="admin.php">Administrar Usuarios <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="agregar-servicio.php">Administrar Servicios <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Administrar Publicidad <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Administrar Inventario <span class="sr-only"></span></a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="">Bienvenido <strong><?php echo $_SESSION['user']; ?></strong> </a>
                <a href="desconectar.php"> Cerrar Sesión </a>

            </form>
        </div>
    </nav>

    <form class="formulario" method="post" action="">



        <h1>Registrar Nuevo estilista</h1>

        <div class="contenedor">

            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Nombre Completo" name="realname" required>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" placeholder="Correo Electronico" name="nick" required>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" name="pass" required>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Repetite Contraseña" name="rpass" required>
            </div>

            <input type="submit" value="Registrate" name="submit" class="button">

            <p>Al registrar debes otorgar a tu estilista su correo y constraseña.</p>
            <!--<p>¿Ya tienes una cuenta?<a class="link" href="login.php">Iniciar Sesión</a></p>-->
        </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        require("include/registro-estilista.php");
    }
    ?>
</body>

</html>