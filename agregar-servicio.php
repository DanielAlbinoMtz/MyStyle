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
    <link rel="icon" href="images/icon.png" type="image/png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Servicio</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="admin.php">
            <img src="/images/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
            MyStyle
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="admin.php">Administrar Usuarios <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="agregar-servicio.php">Administrar Servicios <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="agregar-publicidad.php">Administrar Publicidad <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ag-inventario.php">Administrar Inventario <span class="sr-only"></span></a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="">Bienvenido <strong><?php echo $_SESSION['user']; ?></strong> </a>
                <a href="desconectar.php"> Cerrar Sesión </a>

            </form>
        </div>
    </nav>



    <center> <br /><br><br>
        <form class="formulario" action="guardar_imagen.php" method="POST" enctype="multipart/form-data">
            <h2>Agregar un nuevo servicio</h2>
            <input type="text" name="servicio" placeholder="Nombre de Servicio" value="" required><br><br>
            <input type="number" name="precio" placeholder="Agregar Precio" value="" required><br><br>
            <input type="text" name="duracion" placeholder="Agregar Duración" value="" required><br><br>
            <input type="file" name="imagen" required><br><br>
            <input type="submit" value="Agregar Servicio">
        </form>
    </center>

    <center> <br><br>
        <h2>Servicios actuales</h2>
        <table border="2">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Servicio</th>
                    <th>Precio</th>
                    <th>Duración</th>
                    <th>Imagen</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>

            </thead>
            <tbody>
                <?php
                include("include/connect_db.php");

                $query = "SELECT * FROM servicios";
                $resultado = $mysqli->query($query);

                while ($row = $resultado->fetch_assoc()) {
                ?>
                <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['nombre'];?></td>
                <td><?php echo $row['precio'];?></td>
                <td><?php echo $row['duracion'];?></td>
                <td> <img height="120px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/></td>
                <th><a href="editar_servicio.php?id=<?php echo $row['id']; ?>">Editar</a></th>
                <th><a href="eliminar_servicio.php?id=<?php echo $row['id']; ?>">Eliminar</a></th>
                    
                    
                </tr>

                <?php

                }

                ?>
            </tbody>
        </table>
    </center>

    
</body>

</html>