<?php
	function conectarDB($host,$user,$password,$dbname)
	{
		return $conn = mysqli_connect($host,$user,$password,$dbname);
	}

	function cabecera($titulo)
	{
        echo '<!DOCTYPE html><html lang="es-mx">
		<head>
    	<meta charset="UTF-8">
    	<title>Login</title>
    	<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="estilo.css">
    	 <link rel="stylesheet" type="text/css" href="scss/css/font-awesome.min.css">
    	<script src="js/bootstrap.js"></script>
		</head>';
    }
?>