<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" type="text/css" href="cssED/alumno.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fonts/helvetica">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<meta charset="UTF-8">
	<title>Evaluacion Docente UMG</title>
</head>

<body class="bodyalumno">
<!--barra menu-->
		<nav id="menutop" class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			<img class="logo"src="icon/logoUMG.png" alt="" width="100%" height="auto">
			</div>

		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul id="usuario" class="nav navbar-nav">
					<br><li>Bienvenido: </li>
					<br><li><label>Nombre del alumno carnet xxx xx<label></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a class="navbar-brand" href="#">
						<img src="icon/cerrar2.png" width="40px" height="auto">
						Salir
						</a>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	

<!--barra menu-->


	<div id="tabla">
		<table  class="table table-hover table-striped">
			<thead>
				<tr>
					<th></th>
					<th>Codigo</th>
					<th>Curso</th>
					<th>Catedrático</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="botones">
						<button type="button" class="btn btn-danger">Evaluar</button>
					</td>
					<td>2690-238</td>
					<td>Estadistica Inferencial</td>
					<td>Ing. Juan Carlos Ordoñez</td>
				</tr>
				<tr>
					<td class="botones">
						<button type="button" class="btn btn-danger">Evaluar</button>
					</td>
					<td>2690-345</td>
					<td>Analisis de Sistemas</td>
					<td>Ing. Durwin Nose</td>
				</tr>
				<tr>
					<td class="botones">
						<button type="button" class="btn btn-danger">Evaluar</button>
					</td>
					<td>2690-235</td>
					<td>Diseño de Sistemas</td>
					<td>Ing. Durwin Nose</td>
				</tr>
				<tr>
					<td class="botones">
						<button type="button" class="btn btn-danger">Evaluar</button>
					</td>
					<td>2690-238</td>
					<td>Estadistica Inferencial</td>
					<td>Ing. Juan Carlos Ordoñez</td>
				</tr>
				<tr>
					<td class="botones">
						<button type="button" class="btn btn-danger">Evaluar</button>
					</td>
					<td>2690-345</td>
					<td>Analisis de Sistemas</td>
					<td>Ing. Durwin Nose</td>
				</tr>
				<tr>
					<td class="botones">
						<button type="button" class="btn btn-danger">Evaluar</button>
					</td>
					<td>2690-235</td>
					<td>Diseño de Sistemas</td>
					<td>Ing. Durwin Nose</td>
				</tr>
			</tbody>
		</table>
		<div id="cajatexto"> 
			<br><h3>Sugerencias:</h3>
			<textarea class="form-control" autocomplete="off" name="sugerencias" id="sugerencias"  rows="5" >
			</textarea>
		</div>
		<div >
			<button id="enviar" type="button" class="btn btn-success">Enviar</button>

		</div> 
	</div>
</body>

</html>