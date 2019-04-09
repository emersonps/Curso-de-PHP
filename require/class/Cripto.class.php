<?php
class Cripto
{
	public function setCripto($param)
	{
		#$_cripto = md5($param);#32caracteres
		#$_cripto = md5(sha1($param)); #40caracteres 
		#$_cripto = hash('sha256',$param); #parametro1 = nivel, param2=onde - 64caracteres
		#$_cripto = hash('sha384',$param); #96caracteres
		#$_cripto = hash('sha512',$param); #128caracteres
		#$_cripto = hash('whirlpool',$param);

		$_cripto = hash('whirlpool',hash('sha512',hash('sha384',hash('sha256',sha1(md5('pradificultar'.$param))))));

		return $_cripto;
	}

	#teste
}
/*
$cpt = new Cripto;
var_dump($cpt->setCripto('a'));
print strlen($cpt->setCripto('a'));
*/