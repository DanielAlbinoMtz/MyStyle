
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("include/connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	
	$sql3=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f3=mysqli_fetch_assoc($sql3)){
		if($pass==$f2['passest']){
			$_SESSION['id']=$f3['id'];
			$_SESSION['user']=$f3['user'];
			$_SESSION['rol']=$f3['rol'];

			echo '<script>alert("BIENVENIDO ESTILISTA")</script> ';
			echo "<script>location.href='estilista/home.php'</script>";
		
		}
	}

	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];

			header("Location: cliente/index.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='login.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='login.php'</script>";	

	}

?>