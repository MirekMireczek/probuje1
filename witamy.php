<?php

	session_start();
	
	if(!isset($_SESSION['udanarejestracja']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset ($_SESSION['udanarejestracja']);
	}

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Osadnicy - gra przegladarkowa </title>
</head>

<body>

<h1> Dziękujemy za rejestracje w serwisie! Zaloguj sie na swoje konto!</h1> <br /><br />

	<a href="index.php"> Zaloguj się na swoje konto </a>
	<br /> <br />



</body>
</head>