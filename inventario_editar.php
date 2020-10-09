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
    <meta charset="UTF-8">
    <link rel="icon" href="images/icon.png" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Servicio</title>
</head>
<body>
            <?php
                include("include/connect_db.php");

                $id = $_REQUEST['id'];

                $query = "SELECT * FROM inventario WHERE id = '$id'";
                $resultado = $mysqli->query($query);
                $row = $resultado->fetch_assoc();
            ?>

<center> <br /><br><br>
        <form class="formulario" action="proceso_modificarinventario.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
            <h2>Modificar inventario</h2>
            <input type="text" name="nombre" placeholder="Nombre del Producto" value="<?php echo $row['nombre'];  ?> " required><br><br>
            <input type="text" name="descripcion" placeholder="Descripcion" value="<?php echo $row['descripcion'];  ?> " required><br><br>
            <input type="text" name="precio" placeholder="Precio" value="<?php echo $row['precio'];  ?> " required><br><br>
            <input type="text" name="existente" placeholder="Existensia" value="<?php echo $row['existente'];  ?> " required><br><br>
            <img height="180px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>"/> <br><br>
            <input type="file" name="imagen" ><br><br>
            <input type="submit" value="Modificar Producto">
        </form>
    </center>

</body>
</html>