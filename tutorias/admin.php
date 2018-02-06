
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="scss/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="estilo1.css">

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
	<title>Administrador</title>
</head>
<body>
	<div class="container">
		<div class="row p-3"></div>

		<div class="row">
			<div class="col-4"></div>
			<div class="col-4 mimi"><center>Administrador</center></div>
			<div class="col-4">
				<?php
	                 $usuario = $_SESSION['usuario'];
	                 echo "\n <a href='logout.php' title='usuario: $usuario'><button type='button' class='btn btn-outline-danger'>Cerrar Sesion<i class='fa fa-sign-out' aria-hidden='true'></i></button></a>";
                ?>
			</div>
		</div>
	</div>

	<div class="container" id="botones">
		<div class="container"></div>
		<div class="container">
			<div class="row p-3"></div>

			<div class="row">
				<div class="col-4"></div>
				<div class="col-4">
					<a href="http://localhost:3000/estudiantes">
						<button type="button" class="btn btn-primary btn-lg btn-block">Estudiantes</button>
					</a>
				</div>
				<div class="col-4"></div>
			</div>

			<div class="row p-3"></div>

			<div class="row">
				<div class="col-4"></div>
				<div class="col-4">
					<a href="http://localhost:3000/materia">
						<button type="button" class="btn btn-primary btn-lg btn-block">Materias</button>
					</a>
				</div>
				<div class="col-4"></div>
			</div>

			<div class="row p-3"></div>

			<div class="row">
				<div class="col-4"></div>
				<div class="col-4">
					<a href="http://localhost:3000/profesors">
						<button type="button" class="btn btn-primary btn-lg btn-block">Profesores</button>
					</a>
				</div>
				<div class="col-4"></div>
			</div>

			<div class="row p-3"></div>

			<div class="row">
				<div class="col-4"></div>
				<div class="col-4">
					<button type="button" class="btn btn-primary btn-lg btn-block">Tutorias</button>
				</div>
				<div class="col-4"></div>
			</div>
		</div>
		<div class="container"></div>
	</div>

</body>
</html>