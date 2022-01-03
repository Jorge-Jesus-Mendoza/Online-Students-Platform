<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>

<!DOCTYPE html>
<?php
include("cn2.php");
$usuarios = "SELECT * FROM user";

?>





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
<?php include "php/navbar.php"; ?>

<style>

fieldset.scheduler-border {
    border: 0px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}


</style>



<body>

<br>

<?php

 $id=$_REQUEST['id'];
 $query="SELECT * FROM user WHERE id='$id'";
 $resultado=$conexion->query($query);
 $row=$resultado->fetch_assoc();

 ?>

<form action="modificarusuarios.php?id=<?php echo $row["id"];?>" method="post">
 <fieldset class="scheduler-border">
 <legend>Ingrese los datos del usuario a editar</legend>

 




  <label for="usr">Nombre:</label>
  <input type="text" name="fullname" class="form-control" id="fullname" value="<?php echo $row['fullname']; ?>">

<div class="form-group">
  <label for="pwd">Usuario:</label>
  <input type="text" name="username"class="form-control" id="username" value="<?php echo $row['username']; ?>">
</div>

<div class="form-group">
  <label for="pwd">Correo:</label>
  <input type="text" name="email"class="form-control" id="email" value="<?php echo $row['email']; ?>">
</div>
<center>
<button type="submit" type="submit" class="btn btn-success" value="">Actualizar</button>
<a href="mostrartablausuarios.php" >Ver Registros</a>

</center>
 </fieldset>
</form>

<fieldset class="scheduler-border">
  <div class="datos">
    <div>
      
      <h2>Desarrollado por:</h2>
      <h4>   Jorge Jesús Mendoza Arraiz C.I: V-28396528 </h4>
      <h4>   Jhon Jhon Vargas Castro C.I: V-28061153 </h4>
      <h4>   Erika Raquel Garzón Garzon CI: V-30398068</h4>
      <h4>   Adrián Jesús Díaz Gamboa CI: V-29852818</h4>
      <h4>
        Sección: SID2B
      </h4>
      
    </div>

  </div>

</fieldset>





</body>

</html>
