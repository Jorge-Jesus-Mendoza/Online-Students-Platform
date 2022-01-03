<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="perfiles2.css">
    <title>Document</title>
</head>
<body>
<?php include "php/navbar.php"; ?>
  <div class="relleno">
    <h1>Administrador</h1>
  </div>

  <div>
    <section class="enlaces">
      <h4>Modificar Horarios</h4>
    </section>

    <section class="enlaces">
      <div>
        <a href="admin/horario_primero.php"><button><img src="Imagenes/primero.jpg" alt=""></button></a>
        <h4>Ir al horario de Primer Año</h4>
      </div>

      <div>
        <a href="admin/horario_segundo.php"><button><img src="Imagenes/segundo.jpg" alt=""></button></a>
        <h4>Ir al horario de Segundo Año</h4>
      </div>

      <div>
        <a href="admin/horario_tercero.php"><button><img src="Imagenes/tercero.jpg" alt=""></button></a>
        <h4>Ir al horario de Tercer Año</h4>
      </div>

      <div>
        <a href="admin/horario_cuarto.php"><button><img src="Imagenes/cuarto.jpg" alt=""></button></a>
        <h4>Ir al horario de Cuarto Año</h4>
      </div>

      <div>
        <a href="admin/horario_quinto.php"><button><img src="Imagenes/quinto.jpg" alt=""></button></a>
        <h4>Ir al horario de Quinto Año</h4>
      </div>

    </section>
    
  </div>
  
  <div>
    <section class="enlaces">

      <div>
          <a href="admin/documentos/primero/horario_primero.php"><button><img src="Imagenes/documentos-confirmados-o-documentos-aprobados_149152-439.jpg" alt=""></button></a>
          <h4>Realizar registros de documentos</h4>
      </div>

    </section>
  </div>
    
    
    
    
    
    

</body>
</html>