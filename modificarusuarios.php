<?php
include ("cn2.php");

$id= $_REQUEST["id"];

$fullname = $_POST["fullname"];
$username = $_POST["username"];

$email = $_POST["email"];

$query= "UPDATE user SET fullname='$fullname', username='$username', email='$email' WHERE id='$id'";
$resultado  = mysqli_query($conexion,$query);

if(resutado){
	
	echo "<script>
	
	alert('Registro actualizado con exito');
	window.location='mostrartablausuarios.php';
	</script>";
}else {
	echo
	"<script>
	alert('existe alguna falla, favor de intentar nuevamente');
	window.location = 'mostrartablausuarios.php';
	</script>";
}
?>