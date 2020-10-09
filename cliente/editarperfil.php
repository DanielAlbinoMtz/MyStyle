<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:login.php");
} elseif ($_SESSION['rol'] == 1) {
    header("Location:index.php");
}
?>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>MyStyle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/perfil.css">
    <link rel="icon" href="../images/icon.png" type="image/png" />
</head>

<body>
    <header id="main-header">

        <a id="logo-header" href="#">
            <span class="site-name">MyStyle</span>
        </a> <!-- / #logo-header -->

        <nav>

            <ul class="nav pull-right">
                <li><a href="perfil.php?id=<?php echo $_SESSION['id'];?>">Bienvenid@ <strong><?php echo $_SESSION['user']; ?></strong> </a></li>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="citas.php">Citas</a></li>
                <li><a href="productos.php">Productos</a></li>
                <li><a href="estilistas.php">Estilistas</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="../desconectar.php"> Cerrar Sesión </a></li>
                <!--Forma Correcta de Desconectar ya que esta en directorio principal-->

            </ul>
        </nav><!-- / nav -->

    </header>


<?php
if (isset($_GET['id'])){

    include("../include/connect_db.php");

                $query = "SELECT id,user,password,email,image FROM login WHERE id='".$_GET['id']."'";
                $resultado = $mysqli->query($query);

                while ($row = $resultado->fetch_assoc()) {

?>
            
            <center> <br /><br><br>
        <form class="formulario" action="modificarperfil.php?id=<?php echo $row['id'];?>" method="POST" enctype="multipart/form-data">
            <h2>Editar perfil</h2>
            <input type="text" name="user" placeholder="Nombre de Servicio" value="<?php echo $row['user'];  ?> " required><br><br>
            <input type="password" name="password" placeholder="Agregar Precio" value="<?php echo $row['password'];  ?>" required><br><br>
            <input type="email" name="email" placeholder="Agregar Duración" value="<?php echo $row['email'];  ?>" required><br><br>
            <img height="180px" src="data:image/jpg;base64,<?php echo base64_encode($row['image']); ?>"/> <br><br>
            <input type="file" name="imagen" ><br><br>
            <input type="submit" value="Editar perfil">
        </form>
    </center>


<?php
   }  
}               
?>

    <!--footer id="main-footer">
		<p>&copy; 2020 <a href="#">MyStyle.com</a></p>
    </footer-->
</body>

</html>