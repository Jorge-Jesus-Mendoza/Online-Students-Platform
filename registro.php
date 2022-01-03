<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="disenos.css">
	</head>
<body>
	<?php include "php/navbar.php"; ?>
	<div class="secciones2">
		<section class="sect2">
			<h2>Registro</h2>

			<form role="form" name="registro" action="php/registro.php" method="post">
				<div class="form-group">
					<label for="username">Número de Cédula</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Número de Cédula">
				</div>
				<div class="form-group">
					<label for="fullname">Nombre Completo</label>
					<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo">
				</div>
				<div class="form-group">
					<label for="email">Correo Electronico</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
				</div>
				<label for="">¿Cuál es tu lugar en la institución?</label>
				<select name="agno" id="agno">
					<optgroup label="Estudiantes" >
						<option value="1">Primer año</option>
						<option value="2">Segundo año</option>
						<option value="3">Tercer año</option>
						<option value="4">Cuarto año</option>
						<option value="5">Quinto año</option>
					</optgroup>
					<optgroup label="Trabajadores" >
						<option value="6">Administrador</option>
						<option value="7">Directivo</option>
						<option value="8">Docente</option>

					</optgroup>
					

				</select>
				<div class="form-group">
					<label for="password">Contrase&ntilde;a</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
				</div>
				<div class="form-group">
					<label for="confirm_password">Confirmar Contrase&ntilde;a</label>
					<input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
				</div>

				<button type="submit" class="btn btn-default">Registrar</button>
			</form>

		</section>

	</div>

			






	<script src="js/valida_registro.js"></script>
</body>
</html>