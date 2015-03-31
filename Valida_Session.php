<?php
	
	include("conectar_bd.php");  
    	conectar_bd();

	session_start();
	
	if(!isset($_SESSION['valido']))
		$_SESSION['valido'] = 0;

	$varUser=$_POST['usuario'];
	$varPass=$_POST['password'];

	$query = "SELECT * FROM usuario WHERE usuario='$varUser' AND password='$varPass' ";

	$record = mysql_query($query);

	if(mysql_num_rows($record)>0)
	{
		$_SESSION['valido']=1;
		header('location: principal.php');
	}
	else
	{
		$_SESSION['valido']=0;
		header('location: index.php');
	}

?>
