<?php 
	//var_dump($_SERVER['REDIRECT_URL']);die;

	require_once"header.php";

	if(isset($_SERVER['REDIRECT_URL']))
	{
		$r_URL = substr($_SERVER['REDIRECT_URL'], 1);
		$r_URL = explode('/', $r_URL);

		//primeiro array passado
		if(file_exists($r_URL[0].'.php')) 
		{
			require_once $r_URL[0].'.php';
			
			if(strrchr($r_URL[0], '.'))
			{
				$id = explode('.', $r_URL[0]);
				$id = intval($id[1]);
			}
		}
		else{require_once "404.php";}
	}
	else
	{
		require_once"home.php";
	}

	require_once"footer.php";