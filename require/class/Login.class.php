<?php 

class Login
{

	private $vem , $vsh, $cpt, $crud, $email, $log, $dds;

	public function setLogin($email, $senha)
	{
		$this->vem = new validaEmail;
		$this->vsh = new ValidaSenha;
		$this->cpt = new Cripto;
		$this->crud = new CRUD;

		$this->email = $this->vem->setValidaEmail($email);
		$this->senha = $this->vsh->setValidaSenha($senha);

		$this->log = $this->senha == $senha ?
		$this->crud->select('idUsuario','usuario','WHERE email=? && senha=?',
						[$this->email,$this->cpt->setCripto($this->senha)]) : FALSE;

		//return $this->log->rowCount(); //conta 

		if($this->log && $this->log->rowCount() > 0 )
		{
			//	return $this->log;
			foreach($this->log as $this->dds)
			{
				//return $this->dds; 
				$_SESSION['logado'] = $this->dds;
				header('location:../../admin/');
			}
		}
		else
		{
			return 'Acesso negado.';
		}
	}

}