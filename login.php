<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
    <link  rel="icon"   href="images/icon.png" type="image/png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Inicia Sesión</title>
    <script src="https://kit.fontawesome.com/3307f97461.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/log-reg.css">
    <script src="validar.js"></script>
</head>
<body>

<h1 style="color: #de4c8a;font-style:italic;">Bienvenido a MyStyle</h1>

<div class="login-box">
    <form class="formulario" action="validar.php" method="post" onsubmit="return validarlogin();">
        <h1>Inicia Sesión</h1>
        <div class="contenedor">

            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" id="mail" name="mail" placeholder="Correo Electronico" >
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" id="contraseña" name="pass" placeholder="Contraseña" >
            </div>

            <!--<input type="submit" value="Login" class="button" >   //OnClick="location.href='index.html' "/tipo submit te lleva a otra ubicacion sin validar nada/-->
            <input type="submit" value="Login" class="button">
            <p>¿No tienes una cuenta?<a class="link" href="register.php">Regístrate</a></p>
        </div>
</div>


	<!--<center><div class="tit"><h2 style="color: #0000FF; ">Inicio de sesión</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>-->

<!-- formulario registro 

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu Password</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
//		if(isset($_POST['submit'])){
//			require("registro.php");
//		}
	?>
	Fin formulario registro 

		</td>
		</tr>
		</table>
		</div></center></div></center>
-->
	
</body>
</html>