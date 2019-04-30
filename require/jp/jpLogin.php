<?php 
	require_once"../class/ConDB.class.php";
	$lgn=new Login;
	//var_dump($lgn);die;
	print $lgn->setLogin($_POST['email'],$_POST['senha']);
?>