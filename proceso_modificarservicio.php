<?php

session_start();
if (@!$_SESSION['user']) {
    header("Location:login.php");
} elseif ($_SESSION['rol'] == 2) {
    header("Location:index.php");
}

include 'include/connect_db.php';

$id = $_REQUEST['id'];

$servicio = $_POST['servicio'];
$precio = $_POST['precio'];
$duracion = $_POST['duracion'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "UPDATE servicios SET nombre='$servicio', precio='$precio', duracion='$duracion',imagen='$imagen' WHERE id = '$id' ";

//$resultado = $connect_db-> mysqli_query($query);

$resultado=$mysqli->query($query);
if($resultado){
    
    echo '<script>alert("Servicio Modicado")</script> ';
	echo "<script>location.href='agregar-servicio.php'</script>";
}
else{
    echo '<script>alert("NO SE PUDO MODIFICAR")</script> ';
	echo "<script>location.href='agregar-servicio.php'</script>";

}
