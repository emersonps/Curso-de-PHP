<link type=text/css rel=stylesheet href=/require/css/cad-log.css />

<div>
	<div>
		<form action=javascript:void(0)>
			<p class="title">Ainda não possuo conta</p>
			<p>Faça seu cadastro, é super rápido</p>
			<button class="button inputButton" onclick=location.href='/cad-cliente'>Continuar</button>
		</form>

		<form action=javascript:void(0)>
			<p class="title">Já possuo conta</p>
			<input type="email" class="input inputButton" placeholder=E-mail />
			<input type=password class="input inputButton" placeholder=Senha maxlength=12 /> 	
			<a href="" class=link>Esqueceu sua senha?</a>
			<p>mensagem de erro</p>
			<button class="button inputButton" onclick=login()>Logar</button>
		</form>
	</div>
</div>