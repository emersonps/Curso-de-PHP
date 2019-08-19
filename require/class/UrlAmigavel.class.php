<?php 
	class UrlAmigavel
	{
		private $param, $r_URL, $pos, $pos0, $pos1;
		public function setUrlAmigavel($param)
		{
			$this->param = $param;

			if($this->param)
			{
				#url chega: /produto 
				#ou: /admin/cadastro-cliente
				$this->r_URL = explode('/', substr($this->param,1));
				#produto [0]
				#admin/cadastro-cliente	[0,1]

				$this->pos0 = isset($this->r_URL[0]) ? $this->r_URL[0] : NULL;
				$this->pos1 = isset($this->r_URL[1]) ? $this->r_URL[1] : NULL;

				$this->pos = !substr_count($this->param, '/admin/') ? $this->pos0 : $this->pos1;

				if(substr($this->param, -1,1) == '/')
				{return "404.php";}
				else				
				if(file_exists($this->pos.'.php'))
				{return $this->pos.'.php';}
				else
				{return "404.php";}
			}
			else
			{return "home.php";}
		}
	}