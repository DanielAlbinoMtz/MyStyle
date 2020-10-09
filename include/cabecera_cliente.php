<!DOCTYPE html>

<h1 class="span">MyStyle</h1>
<head>
<link rel="stylesheet" href="./MyStyle/include/cabecera.css">
</head>
<header id="main-header">
		
		<a id="logo-header" href="#">
			<span class="site-name">MyStyle</span>
			</a> <!-- / #logo-header -->

		<nav>
			
            <ul class="nav pull-right">
				<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			    <li><a href="#">Inicio</a></li>
				<li><a href="#">Acerca de</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="../desconectar.php"> Cerrar Cesión </a></li>			<!--Forma Correcta de Desconectar ya que esta en directorio principal--> 
               
			</ul>
		</nav><!-- / nav -->

	</header><!-- / #main-header -->

	
	
	
	<footer id="main-footer">
		<p>&copy; 2020 <a href="#">MyStyle.com</a></p>
	</footer> <!-- / #main-footer -->

	
</body>