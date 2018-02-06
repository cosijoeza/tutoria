<?php
	session_start();
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="scss/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <title>Tutorias</title>
	</head>
	<body>
  	<div class="container">
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8 mimi">
          <center>
            <h1>Sistema de tutorías</h1>
            <h3>¿Quién comenzará?</h3>
          </center>
        </div>
        <div class="col-2"></div>
      </div>
      
      <div class="row">
        <div class="col-2"></div>
        <div class="col-8 pt-5">
              <?php
                if( isset($_SESSION['usuario']) )
                {
                  $usuario = $_SESSION['usuario'];
                  echo "\n <a class='btn btn-outline-dark  mx-3' href='logout.php' title='usuario: $usuario'>Terminar <i class='fa fa-sign-out fa si' aria-hidden='true'></i></a> ";
                }
                else
                {
                  echo "<div class='row p-2 choose'><div class='col border m-4'> ";
                  echo "<center><a class = 'si'href='login.php' title='usuario:'><i class='fa fa-user fa-lg' aria-hidden='true'></i></a><br/><b>Administrador</b></center>";
                  echo "</div>";

                  echo " <div class='col border m-4'>";
                  echo "<center><a class='si' href='login_prof.php' title='usuario: '><i class='fa fa-users' aria-hidden='true'></i></a><br/><b>Profesores</b></center>";
                  echo "</div> </div>";
                }
              ?>
        </div>
        <div class="col-2"></div>
      </div> 
    </div>

  </body>
</html>