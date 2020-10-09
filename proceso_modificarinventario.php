<?php

session_start();
if (@!$_SESSION['user']) {
    header("Location:login.php");
} elseif ($_SESSION['rol'] == 2) {
    header("Location:index.php");
}

include 'include/connect_db.php';

$id = $_REQUEST['id'];

$nombre=$_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio=$_POST['precio'];
$existente=['existente'];

$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "UPDATE inventario SET nombre='$nombre', descripcion='$descripcion', precio='$precio',existente='$existente', imagen='$imagen' WHERE id = '$id' ";

//$resultado = $connect_db-> mysqli_query($query);

$resultado=$mysqli->query($query);
if($resultado){
    
    echo '<script>alert("Publicidad Modicada")</script> ';
	echo "<script>location.href='ag-inventario.php'</script>";
}
else{
    echo '<script>alert("NO SE PUDO MODIFICAR")</script> ';
	echo "<script>location.href='ag-inventario.php'</script>";

}