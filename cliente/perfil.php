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
            
<div class="contenido">
    <div class="header">
        <img class="imagen" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" >
        <h1 class="user-name"> <?php echo $row['user']; ?></strong></h1>
    </div>

    <ul class="social">
        <li>
            <i class="icon email"></i>
            <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email'];?></a>
        </li>
        <li>
            <i class="icon face"></i>
            <a href="#">Contraseña: <?php echo $row['password']; ?></a>
        </li>
        <li>
            <i class="icon twt"></i>
            <a href="#">ID: <?php echo $row['id']; ?></a>
        </li>
    </ul>
    <center><a class="bt" href="editarperfil.php?id=<?php echo $_SESSION['id'];?>">Editar perfil</a></center>

    <div class="about">
        <h3>Acerca de</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam porro tenetur officia quisquam aut quo mollitia optio vel, assumenda eum labore officiis inventore iure possimus expedita tempora pariatur! Amet, alias!
        </p>
    </div>
</div>







<?php
   }  
}               
?>

    <!--footer id="main-footer">
		<p>&copy; 2020 <a href="#">MyStyle.com</a></p>
    </footer-->
</body>

</html>