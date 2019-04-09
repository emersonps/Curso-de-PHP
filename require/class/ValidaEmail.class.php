<?php

class ValidaEmail
{
	public function setValidaEmail($email)
	{	
		$ext = array('.com','.br','.net','.gov','.org','.tv');
		
		//if(strlen($email) == '')
		//if(empty($email)
		//if($email == '')
		if(!$email)
			return 'Informe o e-mail';
		
		//preg_matcth valida o formato do e-mail. Expressão regular para aperfeiçoar o código no 1º parâmetro; Parâmetros: 1-o que será validado 2-onde. Expressão: i = insensitive; '+'=obriga '*'=opcional, '\'=escape de caractere, {minimo, maximo}. Ex.: nome_email-nome.teste@teste.com.br
		else
			if(!preg_match('/[0-9a-z\_\.\-]+\@[0-9a-z\_\.\-]*[0-9a-z\_\-]+\.[a-z]{2,3}$/i',$email)) 
				return 'E-mail inválido 1';
			else
				#in_array - parametro 1- o que quero; par1- onde eu quero - comparar valores no array;
				#strrchr - verifica o que tem à direita do valor do primeiro parâmetro;
				if(!in_array(strrchr($email,'.'),$ext))
					return 'E-mail inválido 2';
				else
					return $email;
	}
}