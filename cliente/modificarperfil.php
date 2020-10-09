<?php

session_start();
if (@!$_SESSION['user']) {
    header("Location:login.php");
} elseif ($_SESSION['rol'] == 2) {
    header("Location:index.php");
}

include 'include/connect_db.php';

$id = $_GET['id'];

$user = $_POST['user'];
$password = $_POST['password'];
$email = $_POST['email'];
$imagen = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$query = "UPDATE login SET user='$user', password='$password', email='$email',image='$image' WHERE id = '$id' ";

//$resultado = $connect_db-> mysqli_query($query);

$resultado=$mysqli->query($query);
if($resultado){
    
    echo '<script>alert("Perfil Modicado")</script> ';
	echo "<script>location.href='cliente/perfil.php'</script>";
}
else{
    echo '<script>alert("NO SE PUDO MODIFICAR")</script> ';
	echo "<script>location.href='cliente/perfil.php'</script>";

}
