<?php 
	require_once"../class/ConDB.class.php";
	require_once"../class/Login.class.php";
	$lgn=new Login;
	print $lgn->setLogin($_POST['email'],$_POST['senha']);
?>