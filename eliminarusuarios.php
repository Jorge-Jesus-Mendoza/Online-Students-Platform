<?php
include("cn2.php");
$id = $_GET['id'];
$eliminar = "DELETE FROM user WHERE id='$id'";
$resultadoEliminar=mysqli_query($conexion,$eliminar);

if($resultadoEliminar){
	
	header("Location:mostrartablausuarios.php");
}
	
