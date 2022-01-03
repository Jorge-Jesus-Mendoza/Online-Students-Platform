<!DOCTYPE html>
<?php
include("cn.php");
$usuarios = "SELECT * FROM juegos";

?>

<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
<html>
	<head>
		<title>.: HOME :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>Baúl de Juegos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="estilo.css">
</head>



<body>

<br>


<form action="insertar.php" method="post">
 <fieldset class="scheduler-border">
 <legend>Ingrese los datos del juego a registrar</legend>
 <div class="form-group">
  <label for="pwd">ID</label>
  <input type="text" name="identificador"class="form-control" id="identificador">
</div>



  <label for="usr">Nombre:</label>
  <input type="text" name="nombre" class="form-control" id="nombre">

<div class="form-group">
  <label for="pwd">Descripción:</label>
  <input type="text" name="descripcion"class="form-control" id="descripcion">
</div>

<div class="form-group">
  <label for="pwd">Categoría:</label>
  <input type="text" name="categoria"class="form-control" id="categoria">
</div>
<center>
<button type="submit" type="submit" class="btn btn-success">Guardar</button>
<a href="mostrartabla.php" >Ver Registros</a>

</center>
 </fieldset>
</form>







</body>

</html>
