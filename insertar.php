<?php
require_once("cn.php");

$id= $_POST["identificador"];

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$categoria = $_POST["categoria"];

$sql= "INSERT INTO juegos(id, nombre,descripcion,categoria) VALUES('$id', '$nombre','$descripcion','$categoria')";
$resultado  = mysqli_query($conexion,$sql);

if(resutado){
	
	echo "<script>
	
	alert('Registro insertado con exito');
	window.location='index2.php';
	</script>";
}else {
	echo
	"<script>
	alert('existe alguna falla, favor de intentar nuevamente');
	window.location = 'index2.php';
	</script>";
}
?>
	
