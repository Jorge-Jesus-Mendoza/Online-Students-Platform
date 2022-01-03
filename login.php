<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="disenos.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>

<div class="secciones">
	<section  class="sect3">
			<h2>Iniciar Sesión</h2>

		<form role="form" name="login" action="php/login.php" method="post">
		<div class="form-group">
			<label for="username">Número de cédula o Correo</label>
			<input type="text" class="form-control" id="username" name="username" placeholder="Cédula o Correo">
		</div>
		<div class="form-group">
			<label for="password">Contrase&ntilde;a</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		</div>

		<button type="submit" class="btn btn-default">Acceder</button>
		</form>	
	</section>
		
</div>



		<script src="js/valida_login.js"></script>
	</body>
</html>