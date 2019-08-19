<?php 
require_once"ValidaEmail.class.php";
require_once"ValidaSenha.class.php";
require_once"Cripto.class.php";
require_once"CRUD.class.php";

class Login
{
	private $vem , $vsh, $cpt, $crud, $email, $log, $dds;

	public function setLogin($email, $senha)
	{
		$this->vem = new ValidaEmail;
		$this->vsh = new ValidaSenha;
		$this->cpt = new Cripto;
		$this->crud = new CRUD;

		$this->email = $this->vem->setValidaEmail($email);
		$this->senha = $this->vsh->setValidaSenha($senha);

		$this->log = $this->senha == $senha ?
		$this->crud->select('id','clientes','WHERE email=? && senha=?',
						[$this->email,$this->cpt->setCripto($this->senha)]) : FALSE;

		if($this->email<>$email)
		{
			return $this->email;
		}
		else
		if($this->senha <> $senha)
		{
			return $this->senha;
		}else{
			//return $this->log->rowCount(); //conta 
			if($this->log && $this->log->rowCount() > 0 )
			{
				//	return $this->log;
				foreach($this->log as $this->dds)
				{
					//return $this->dds; 
					$_SESSION['logado'] = $this->dds;
					//header('location:../../admin/');
				}
			}
			else
			{
				return 'Acesso negado.';
			}
		}
	}
}