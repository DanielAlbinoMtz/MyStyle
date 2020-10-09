<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/3307f97461.js" crossorigin="anonymous"></script>
  <link rel="icon" href="images/icon.png" type="image/png" />
  <link rel="stylesheet" href="css/log-reg.css">
  <title>Registrate</title>
  <script src="validar.js"></script>
</head>

<body>

  

  <form class="formulario" method="post" action="" onsubmit="return validar();">
  <h1 style="font-style:italic;color:#e295cb;">Bienvenido a MyStyle</h1>  
  <h1>Registrate</h1>
    <div class="contenedor">

      <div class="input-contenedor">
        <i class="fas fa-user icon"></i>
        <input type="text" id="nombre" placeholder="Nombre Completo" name="realname" required>
      </div>

      <div class="input-contenedor">
        <i class="fas fa-envelope icon"></i>
        <input type="text" id="mail" placeholder="Correo Electronico" name="nick" required>
      </div>

      <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" id="contraseña" placeholder="Contraseña" name="pass" required>
      </div>

      <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
        <input type="password" id="rcontraseña" placeholder="Repite Contraseña" name="rpass" required>
      </div>

      <input type="submit" value="Registrate" name="submit" class="button">

      <p>Al registrarte, aceptas nuestra Condiciones de uso y Politica de Privacidad.</p>
      <p>¿Ya tienes una cuenta?<a class="link" href="login.php">Iniciar Sesión</a></p>
    </div>



  </form>
</body>
<?php
if (isset($_POST['submit'])) {
  require("include/registro.php");
}
?>

</html>

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