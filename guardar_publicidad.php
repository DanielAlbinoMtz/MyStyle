<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:login.php");
} elseif ($_SESSION['rol'] == 2) {
    header("Location:index.php");
}



include 'include/connect_db.php';

$descripcion = $_POST['descripcion'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO publicidad(descripcion,imagen) VALUES('$descripcion','$imagen')";

//$resultado = $connect_db-> mysqli_query($query);

$resultado=$mysqli->query($query);
if($resultado){
    
    echo '<script>alert("Publicidad Agregada")</script> ';
	echo "<script>location.href='agregar-publicidad.php'</script>";
}
else{
    echo '<script>alert("NO SE PUDO AGREGAR")</script> ';
	echo "<script>location.href='agregar-publicidad.php'</script>";

}

?>