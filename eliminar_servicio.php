<?php

session_start();
if (@!$_SESSION['user']) {
    header("Location:login.php");
} elseif ($_SESSION['rol'] == 2) {
    header("Location:index.php");
}

include 'include/connect_db.php';

$id = $_REQUEST['id'];

$query = "DELETE FROM servicios WHERE id = '$id' ";

//$resultado = $connect_db-> mysqli_query($query);

$resultado=$mysqli->query($query);
if($resultado){
    
    echo '<script>alert("Se a eliminado")</script> ';
	echo "<script>location.href='agregar-servicio.php'</script>";
}
else{
    echo '<script>alert("No se pudo eliminar")</script> ';
	echo "<script>location.href='agregar-servicio.php'</script>";

}