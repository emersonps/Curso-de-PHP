<?php 

#require_once "CRUD.class.php"; //manual ou:

function __autoload($class){
	require_once"{$class}.class.php"; //puxa todas as classes da pasta class (apenas o prefixo )
} 


abstract class ConDB //não pode instanciar, só extender - teste na linha 26
{
	private static $cnx;
	private function setConn()
	{
		return 
			is_null(self::$cnx) ? 
				self::$cnx = new PDO("mysql:host=localhost;dbname=idealplacas","Admin","admin") :
				self::$cnx;
	}
	
	public function getConn()
	{
		return $this->setConn();
	}
}
//$conn = new ConDB;

/*
$crud = new CRUD;

//var_dump($crud->insert('user','usuario=?,email=?,cidade=?',['nomeDoUsuário','teste@gmail.com','CidadeDeDeus'])); #teste para inserção

$sel = $crud->select('*','user','WHERE idUser=?',[6]);
foreach($sel as $reg)
{
	//var_dump($reg);
	//var_dump($reg['usuario'].' -> '.$reg['email']);
	$_SESSION['user']=$reg;
}

var_dump($_SESSION['user']['usuario']);
echo '<br>';
var_dump($_SESSION['user']['email']);
*/