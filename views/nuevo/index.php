<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Nuevo Alumno</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:700,900" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo constant('URL') ?>views/errores/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<style>
</style>

<body>
	<h1>Nuevo Alumno</h1>

	<h3><?php echo $this->mensaje; ?></h3>

	<form action="<?php echo constant('URL') ?>nuevo/registrarNuevoAlumno" method="POST">
		<p>
			<label for="nombre"></label>
			<input type="text" name="nombre" id="" required>
		</p>
		<p>
			<label for="apellido"></label>
			<input type="text" name="apellido" id="" required>
		</p>
		<p>
			<label for="matricula"></label>
			<input type="text" name="matricula" id="" required>
		</p>
		<input type="submit" value="Registro Nuevo">
	</form>


</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
