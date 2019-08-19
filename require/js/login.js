function login()
{
	var e = $('main form:nth-of-type(2) input[type=email]'),
		s = $('main form:nth-of-type(2) input[type=password]'),
		msg = $('main form:nth-of-type(2) a + p');

	$.post('/require/jp/jpLogin.php',//para pegar um arquivo em uma pasta
		{
			email:e.val(), //pegando valores das variáveis do arquivo da pasta buscada
			senha:s.val()
		},
		function(res)
		{
			if(res)
				msg.html(res).css({color:'#f00'}); //aplicando efeito ou texto no form (e cascateando divs) que chama essa função.
			else
				//$('main form span').html('Logado com sucesso!!!').css({color:#069});
				location.href='/../../admin/';
		});
}