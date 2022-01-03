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
      <h1>Docente</h1>
    </div>

    <div>

      <section class="enlaces">
        <div>
          <br> <br><label for="">Inglés</label><br>
        </div>
      </section>


      <section class="enlaces">

        <div>
          <a href="Docente/ingles/ingles.php"><button><img src="Imagenes/ilustracion-concepto-clase-ingles_277904-10886.jpg" alt=""></button> </a>
          <h4>Ir a las notas de Inglés de primer año</h4>
        </div>

        <div>
          <a href="Docente/ingles2/ingles.php"><button><img src="Imagenes/ilustracion-concepto-clase-ingles_277904-10886.jpg" alt=""></button></a>
          <h4>Ir a las notas de Inglés de segundo año</h4>
        </div>

        <div>
          <a href="Docente/ingles3/ingles.php"><button><img src="Imagenes/ilustracion-concepto-clase-ingles_277904-10886.jpg" alt=""></button></a>
          <h4>Ir a las notas de Inglés de tercer año</h4>
        </div>

        <div>
          <a href="Docente/ingles4/ingles.php"><button><img src="Imagenes/ilustracion-concepto-clase-ingles_277904-10886.jpg" alt=""></button></a>
          <h4>Ir a las notas de Inglés de cuarto año</h4>
        </div>

        <div>
          <a href="Docente/ingles5/ingles.php"><button><img src="Imagenes/ilustracion-concepto-clase-ingles_277904-10886.jpg" alt=""></button></a>
          <h4>Ir a las notas de Inglés de quinto año</h4>

        </div>

      </section>


      

      <section class="enlaces">
        <div>
          <br><label for="">Física, Química y Biología</label><br>
        </div>
      </section>

      <section class="enlaces">

        <div>
          <a href="Docente/Fisica/ingles.php"><button><img src="Imagenes/pngtree-male-teacher-lovely-physics-class-newton-png-image_3911910.png" alt=""></button></a>
          <h4>Ir a las notas de Física de Cuarto año</h4>
        </div>

        <div>
          <a href="Docente/Fisica2/ingles.php"><button><img src="Imagenes/pngtree-male-teacher-lovely-physics-class-newton-png-image_3911910.png" alt=""></button></a>
          <h4>Ir a las notas de Física de Quinto año</h4>
        </div>

        <div>
          <a href="Docente/Quimica/ingles.php"><button><img src="Imagenes/istockphoto-589420024-1024x1024.png" alt=""></button></a>
          <h4>Ir a las notas de Química de Cuarto año</h4>
        </div>

        <div>
          <a href="Docente/Quimica2/ingles.php"><button><img src="Imagenes/istockphoto-589420024-1024x1024.png" alt=""></button></a>
          <h4>Ir a las notas de Química de quinto año</h4>

        </div>

        <div>
          <a href="Docente/Biologia/ingles.php"><button><img src="Imagenes/61263356-la-clase-de-biología-objetos-relacionados-con-la-composición-simple-infantil-plano-de-la-ilustración.png" alt=""></button></a>
          <h4>Ir a las notas de Biología de Segundo año</h4>
        </div>

      </section>


    </div>
  
    
    
    
    
</body>
</html>