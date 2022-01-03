<!DOCTYPE html>
<?php
include("cn.php");
$usuarios = "SELECT * FROM juegos";

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
 $query="SELECT * FROM juegos WHERE id='$id'";
 $resultado=$conexion->query($query);
 $row=$resultado->fetch_assoc();

 ?>

<form action="modificar.php?id=<?php echo $row["id"];?>" method="post">
 <fieldset class="scheduler-border">
 <legend>Ingrese los datos del juego a editar</legend>

 




  <label for="usr">Nombre:</label>
  <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo $row['nombre']; ?>">

<div class="form-group">
  <label for="pwd">Descripción:</label>
  <input type="text" name="descripcion"class="form-control" id="descripcion" value="<?php echo $row['descripcion']; ?>">
</div>

<div class="form-group">
  <label for="pwd">Categoría:</label>
  <input type="text" name="categoria"class="form-control" id="categoria" value="<?php echo $row['categoria']; ?>">
</div>
<center>
<button type="submit" type="submit" class="btn btn-success" value="">Actualizar</button>
<a href="mostrartabla.php" >Ver Registros</a>

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
