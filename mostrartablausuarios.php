<!DOCTYPE html>
<?php
include("cn2.php");
$usuarios = "SELECT * FROM user";

?>

<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php include "php/navbar.php"; ?>
<body>
<style>

fieldset.scheduler-border {
    border: 0px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}


</style>


<br>


<table class="table table-bordered">

 <tr>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Correo</th>

		<th colspan="2">Operaciones</th>
      </tr>
<?php $resultado = mysqli_query($conexion,$usuarios);
while($row=mysqli_fetch_assoc($resultado)){?>
<tr>
  <th class="table__item"><?php echo
  $row["fullname"];?></th>
	<th class="table__item"><?php echo
	$row["username"];?></th>
	<th class="table__item"><?php echo
	$row["email"];?></th>

	<th><a href="eliminarusuarios.php?id=<?php echo $row["id"];?>" class="table__item__link">Eliminar</a>
  <th><a href="editarusuarios.php?id=<?php echo $row["id"];?>" class="table__item__link">Editar</a>
	</tr>
	<?php
}mysqli_free_result($resultado);?>

</table>

<center><a href="mostrartablausuarios2.php" >Imprimir PDF</a></center>


	<fieldset class="scheduler-border">
  <div class="datos">
    <div>
      
      <h2>Desarrollado por:</h2>
      <h4>   Jorge Jes??s Mendoza Arraiz C.I: V-28396528 </h4>
      <h4>   Jhon Jhon Vargas Castro C.I: V-28061153 </h4>
      <h4>   Erika Raquel Garz??n Garzon CI: V-30398068</h4>
      <h4>   Adri??n Jes??s D??az Gamboa CI: V-29852818</h4>
      <h4>
        Secci??n: SID2B
      </h4>
      
    </div>

  </div>

</fieldset>


</body>
<script src="comprobacion.js"></script>
</html>
