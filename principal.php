<?php
	session_start();
	if(!isset($_SESSION['valido']))
		$_SESSION['valido'] = 0;

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sesiones</title>
	<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dreamtemplatestudio</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
</head>
<body>
	
	<?php
		if($_SESSION['valido']==1)
		{ 
	?>
<a href="Logout.php">Salir</a>
	
	<?php }
	else
		header('location: index.php');
	?>
</body>
</html>
