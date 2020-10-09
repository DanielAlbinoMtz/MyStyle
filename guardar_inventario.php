<?php
session_start();
if (@!$_SESSION['user']) {
    header("Location:login.php");
} elseif ($_SESSION['rol'] == 2) {
    header("Location:index.php");
}



include 'include/connect_db.php';

$nombre=$_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio=$_POST['precio'];
$existente=$_POST['existente'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO inventario(nombre, descripcion, precio, existente, imagen) VALUES('$nombre','$descripcion','$precio','$existente','$imagen')";

//$resultado = $connect_db-> mysqli_query($query);

$resultado=$mysqli->query($query);
if($resultado){
    
    echo '<script>alert("Producto Agregado")</script> ';
	echo "<script>location.href='ag-inventario.php'</script>";
}
else{
    echo '<script>alert("NO SE PUDO AGREGAR")</script> ';
	echo "<script>location.href='ag-inventario.php'</script>";

}

?>