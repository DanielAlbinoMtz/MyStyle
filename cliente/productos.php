<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:login.php");
	}elseif ($_SESSION['rol']==1) {
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
	<link  rel="icon"   href="../images/icon.png" type="image/png" />
</head>

<body>
<header id="main-header">
		
		<a id="logo-header" href="#">
			<span class="site-name">MyStyle</span>
			</a> <!-- / #logo-header -->

		<nav>
			
            <ul class="nav pull-right">
				<li><a href="perfil.php?id=<?php echo $_SESSION['id'];?>">Bienvenid@ <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			    <li><a href="index.php">Inicio</a></li>
				<li><a href="citas.php">Citas</a></li>
				<li><a href="productos.php">Productos</a></li>
                <li><a href="estilistas.php">Estilistas</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="../desconectar.php"> Cerrar Sesión </a></li><!--Forma Correcta de Desconectar ya que esta en directorio principal--> 
               
			</ul>
		</nav><!-- / nav -->

	</header>

    <h1>¿A <?php echo $_SESSION['user'];?></strong> le gustaría comprar algún producto?</h1>
    
    <center> <br>
        <h2>Productos disponibles</h2>
        <table>
        <div class="container">
            
            
            
                <?php
                include("../include/connect_db.php");

                $query = "SELECT nombre,descripcion,precio,existente,imagen FROM inventario";
                $resultado = $mysqli->query($query);
                
                while ($row = $resultado->fetch_assoc()) {
                ?>
                    
                    <div class="card">
                    <img height="200px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" >
                        <h4><?php echo $row['nombre']; ?></h4>
                        <p><?php echo $row['descripcion']; ?></p>
                        <p>$<?php echo $row['precio']; ?>.00</p>
                        <button class="bt" onClick="parent.location='login.html'">¡Pedir!</button>
                        </div> 
                        
                    
                <?php

                }

                ?>
            </table>
            </div>
    </center>

    <div></div>


	<!--footer id="main-footer">
		<p>&copy; 2020 <a href="#">MyStyle.com</a></p>
            </footer-->
</body>
</html>