<?php
	require_once"../class/CRUD.class.php";

	$vEmail = new ValidaEmail;
	$vSenha = new ValidaSenha;
	$crud = new CRUD;
	$filterIn = new ValidaEntradaUsuario;
	$cripto = new Cripto;

	extract($_POST); //transforma dados vindo do post, em variável.
	
	$obrigatorio = array($nomerazao,$documento,$cep,$estado,$cidade,$bairro,$endereco,$numero,$email,$senha,$rSenha);
	
	$nomeArray=explode(' ',$nomerazao);


	for($i = 0; $i<count($obrigatorio); $i++)
	{
		if($obrigatorio[$i]=='')
			$msg = 'Todos os campos com * são obrigatórios!';
	}

	if(isset($msg))
		print $msg;
	else
	if(isset($nomeArray[1]) == '')
		print 'Qual sobrenome?';
	else
	if($vEmail->setValidaEmail($email) <> $email)
		print $vEmail->setValidaEmail($email);
	else
	if($vSenha->setValidaSenha($senha) <> $senha)
		print $vSenha->setValidaSenha($senha);
	else
	if($rSenha <> $senha)
		print 'Senhas não são iguais.';
	else
	if($crud->select('email','tbclientes','WHERE email=?',array($email))->rowCount()>0)
		print 'E-mail já existe em nossa base de dados!';
	else
	if($crud->select('documento','tbclientes','WHERE documento=?',array($documento))->rowCount()>0)
		print 'Documento já existe em nossa base de dados!';
	else
		$crud->insert('tbclientes',
			'nomerazao=?,genero=?,nascimento=?,documento=?,ddd=?,fixocomercial=?,celular=?,cep=?,estado=?,cidade=?,bairro=?,endereco=?,numero=?,complemento=?,observacoes=?,email=?,senha=?, situacao=?,data=?,hora=?',
			array(
				$filterIn->vEntradaUsuario($nomerazao),
				$nascimento,
				$genero,
				$documento,
				$ddd,
				$fixocomercial,
				$celular,
				$cep,
				$estado,
				$filterIn->vEntradaUsuario($cidade),
				$filterIn->vEntradaUsuario($bairro),
				$filterIn->vEntradaUsuario($endereco),
				$numero,
				$filterIn->vEntradaUsuario($complemento),
				$filterIn->vEntradaUsuario($observacoes),
				$email,
				$cripto->setCripto($senha),
				'P',
				date('d/m/Y'),
				date('H:i:s')
			)
		);
