<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="scss/css/font-awesome.min.css">

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
	<title></title>
</head>
<body>
<?php 
	$nombre = $_POST['busqueda'];
	include('bd/con.php');
		$conn = conectarDB("localhost","root","usermysql","tutorias_development");		
		$sql = "SELECT id,nombre,calif_1,calif_2,calif_3,final,ext_1,ext_2,esp FROM materia WHERE nombre='$nombre'";
		/*
			$sql = "SELECT a.matricula,a.nombre,a.id,m.nombre,m.calif_1,m.calif_2 FROM alumnos as a JOIN alum_mat AS am ON am.alumnos_id=a.id JOIN materia AS m ON am.materia_id = m.id WHERE a.id=2";
		*/
		$result = mysqli_query($conn,$sql);
		if(!$result){ echo "No se realizo consulta";}
		else
		{
			echo "<div class='tabla'>";	
			echo "<table class='table table-hover'>";
			echo "<thead><tr><th>Nombre</th><th>Calif1</th><th>Calif2</th><th>Calif3</th><th>Extra 1</th><th>Extra 2</th><th>Especial</th></tr></thead>";
			while($row = mysqli_fetch_array($result,MYSQLI_NUM))
			{
				$size=count($row);
				echo"<tr>";
				for($i=0;$i<$size;$i++)
				{
					echo "<td>".$row[$i]."</td>";
				}
                echo "</tr>";
			}
				echo "</table></div>";
		}
?>
</body>
</html>