<?php 
function __autoload($class){
	require_once "{$class}.class.php";
}

class CRUD extends ConDB
{
	private $query;
	private function prepExec($prep, $exec) #prep - lerá colunas da tabela separadas por virgula
	{										#exec - array de dados conforme colunas	
		$this->query = $this->getConn()->prepare($prep);
		$this->query->execute($exec);
	}

	public function insert($table, $cond, $exec)
	{
		$teste = $this->prepExec('INSERT INTO '.$table.' SET '.$cond.'',$exec);		
		return $this->getConn()->lastInsertId();
	}

	public function select($fields, $table, $cond, $exec)
	{
		$this->prepExec('SELECT '.$fields.' FROM '.$table.' '.$cond.'',$exec);
		return $this->query;
	}

	public function update($table, $cond, $exec)
	{
		$this->prepExec('UPDATE '.$table.' SET '.$cond.'',$exec);
		return $this->query;
	}

	public function delete($table, $cond, $exec)
	{
		$this->prepExec('DELETE FROM '.$table.' '.$cond.' ',$exec);
	}

}