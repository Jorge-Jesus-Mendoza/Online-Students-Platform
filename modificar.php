<?php
include ("cn.php");

$id= $_REQUEST["id"];

$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];

$categoria = $_POST["categoria"];

$query= "UPDATE juegos SET nombre='$nombre', descripcion='$descripcion', categoria='$categoria' WHERE id='$id'";
$resultado  = mysqli_query($conexion,$query);

if(resutado){
	
	echo "<script>
	
	alert('Registro actualizado con exito');
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