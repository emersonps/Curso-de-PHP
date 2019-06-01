<?php
	require_once "require/class/CRUD.class.php";
	require_once "require/config/config.php";
	
	$r_QueryString = explode('/',substr(REDIRECT_QUERY_STRING,3));
		
	$urlAmigavel = new UrlAmigavel;
	$returnUrlAmigavel = $urlAmigavel->setUrlAmigavel(REDIRECT_URL);//pega tudo após / na url
?>
<!DOCTYPE html>
<html lang="pt-BR">
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