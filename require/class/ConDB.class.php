<?php 
abstract class ConDB //não pode instanciar, só extender - teste na linha 26
{
	private function setConn()
	{
		try
		{
			$opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
			$cnx = new PDO("mysql:host=localhost;dbname=idealplacas","root","", $opcoes);
		}
		catch ( PDOException $e )
		{
			echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
		}

		return $cnx;
	}
	
	public function getConn()
	{
		return $this->setConn();
	}
}

//$conn = new ConDB;

/*
$crud = new CRUD;
$cripto = new Cripto;
$senha = $cripto->setCripto('overid123')

var_dump($crud->insert('usuario','usuario=?,email=?,senha=?',['Maria','teste@gmail.com',$senha])); #teste para inserção
#teste insert

/*
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
*/#teste Select

/*
$crud = new CRUD;
$upd = $crud->update('user','usuario=?, email=?, cidade=? WHERE idUser=?',
		['Maria Pinheiro de Souza','mariapsonline@gmail.com','Manaus', 7]);
//var_dump($upd);
//var_dump($upd->rowCount());
print $upd->rowCount() < 1 ? 'Não há atualizações a fazer!' : 'Atualização realizada com sucesso!'; */#teste Update

/*
$crud = new CRUD;

$crud->delete('user','WHERE idUser=?',[8]);
#teste Delete

$vle = new ValidaEmail;
var_dump($vle->setValidaEmail('emersonline@commerson.gnn'));


$vPass = new ValidaSenha;
var_dump($vPass->setValidaSenha('overike-.'));
#teste Criptografia
*/

//$lgn = new Login;
//var_dump($lgn->setLogin('teste@gmail.com','overid123'));