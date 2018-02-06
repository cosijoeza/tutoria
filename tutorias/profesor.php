<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="scss/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="estilo2.css">

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
	<title></title>
</head>
<body>
	<div class="container" id="cabecera">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4">
				<center>
					<p class="mimi">Profesor</p>
				</center>
			</div>
			<div class="col-4">
				<center>
				<?php
	                $usuario = $_SESSION['usuario'];
	                echo "\n <a href='logout.php' title='usuario: $usuario'><button type='button' class='btn btn-outline-danger'>Cerrar Sesion<i class='fa fa-sign-out fa' aria-hidden='true'></i></button></a>";
                ?>
				</center>
			</div>
		</div>
	</div>

	<div class="container" id="botones">
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4">
			<!--=====================BUSCADOR=========================-->
				<div class="row">
					<div class="col">
						<form action="busqueda.php" method="post">
						<div class="input-group mb-3">
							<label for="busqueda"></label>
				  			<input type="text" class="form-control" placeholder="Buscar alumno..." aria-label="Recipient's username" aria-describedby="basic-addon2" name="busqueda">
				  			<div class="input-group-append">
				    			<button class="btn btn-outline-secondary" type="submit">
				    				<i class="fa fa-search"></i>
				    			</button>
				  			</div>
						</div>
						</form>
					</div>
				</div>
			<div class="row pl-5" id="tabla">

			</div>
			<!--=====================BOTON=========================-->
				<div class="row">
					<div class="col">
						<a href="http://localhost:3000/entrevista"><button type="button" class="btn btn-primary btn-lg btn-block">Entrevista</button></a>
					</div>
				</div>
			</div>
			<div class="col-4"></div>
		</div>
	</div>
</body>
</html>