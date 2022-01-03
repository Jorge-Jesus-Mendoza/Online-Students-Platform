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
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Bienvenido</h2>
		<h2>¿Qué deseas  hacer?</h2>
		<div>
			<button><a href="index2.php">Quiero registrar Juegos</a></button>
			<button><a href="./mostrartablausuarios.php">Quiero editar los usuarios registrados</a></button>

		</div>
		

</div>
</div>
</div>

<style>

fieldset.scheduler-border {
    border: 0px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
}


</style>

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