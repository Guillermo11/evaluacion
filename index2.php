<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" type="text/css" href="cssED/index.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fonts/helvetica">
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<meta charset="UTF-8">
	<title>Evaluacion Docente UMG</title>
</head>
<body id="body1">
	<div id="logo">
		<img src="icon/logoUMG.png" alt="" width="150" height="auto">
	</div>
	<div id="login">
		<h3>Evaluación de docentes</h3>
		<form id="login2" action="Valida_Session.php" method="POST" role="form">
		<!-- <label for="">Usuario</label> -->
		<br>
		<input class="form-control" type="text" name="usuario" autofocus="" required="" placeholder="Nombre de usuario">
		<br>
		<!-- <label for="">Contraseña</label> esto es un comentsrio de prueba de IIBM BLUEMIX-->
		<input class="form-control" type="password" name="password" autofocus="" required="" placeholder="Contraseña">
		<br>
		<button type="submit" class="btn btn-danger">Ingresar</button>
		</form>
	</div>
</body>
</html>