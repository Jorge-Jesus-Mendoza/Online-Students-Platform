<?php
include("cn.php");
$id = $_GET['id'];
$eliminar = "DELETE FROM juegos WHERE id='$id'";
$resultadoEliminar=mysqli_query($conexion,$eliminar);

if($resultadoEliminar){
	
	header("Location:mostrartabla.php");
}
	
