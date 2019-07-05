<?php
class ValidaEntradaUsuario
{
	public function vEntradaUsuario($entrada)
	{
		return htmlentities(strip_tags($entrada), ENT_QUOTES);
	}
}