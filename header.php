<?php
	//var_dump($_SERVER)
	require_once "require/class/CRUD.class.php";
	require_once "require/config/config.php";
	//var_dump(REDIRECT_URL);

	//print redirect_query_string;

	$urlAmigavel = new UrlAmigavel;
	$returnUrlAmigavel = $urlAmigavel->setUrlAmigavel(REDIRECT_URL);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Projeto Loja Virtual !!!</title>
	<link rel="stylesheet" type="text/css" href="require/css/header.css" />
	<script type="text/javascript" src="require/js/jquery.js"></script>
	<script type="text/javascript" src="require/js/login.js"></script>
</head>
<body>
	<div id="dvBase">
		<header>
			
		</header>

		<main>