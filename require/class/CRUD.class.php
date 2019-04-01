<?php 

class CRUD extends ConDB
{

	private $query;
	private function prepExec($prep, $exec) #prep - colunas da tabela separadas por virgula
	{
		$this->query = $this->getConn()->prepare($prep);
		$this->query->execute($exec);
	}

	public function insert($table, $prep, $exec)
	{
		$this->prepExec('INSERT INTO '.$table.' SET '.$prep.'',$exec);
		return $this->getConn()->lastInsertId();
	}

	public function select($fields, $table, $prep, $exec)
	{
		$this->prepExec('SELECT '.$fields.' FROM '.$table.' '.$prep.'',$exec);
		return $this->query;
	}
}