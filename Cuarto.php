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
    <link rel="stylesheet" href="perfiles.css">
    <title>Document</title>
</head>
<body>
<?php include "php/navbar.php"; ?>
    <div class="relleno">
      <h1>Cuarto año</h1>
    </div>

    <div>
      <section class="enlaces">
        <div>
          <a href="perfiles/horario_cuarto.php"><button><img src="Imagenes/school-timetable-template-free-vector.jpg" alt=""></button></a>
          <h4>Ver Horario</h4>
        </div>

        <div>
          <a href="Notas/ingles4/ingles.php"><button><img src="Imagenes/ilustracion-concepto-clase-ingles_277904-10886.jpg" alt=""></button></a>
          <h4>Ver Notas de Inglés</h4>
        </div>

        <div>
          <a href="Notas/Fisica/ingles.php"><button><img src="Imagenes/pngtree-male-teacher-lovely-physics-class-newton-png-image_3911910.png" alt=""></button></a>
          <h4>Ver Notas de Física</h4>
        </div>

        <div>
          <a href="Notas/Quimica/ingles.php"><button><img src="Imagenes/istockphoto-589420024-1024x1024.png" alt=""></button></a>
          <h4>Ver Notas de Química</h4>

        </div>
      </section>
    </div>

</body>
</html>