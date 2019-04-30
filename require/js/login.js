function fctLogin()
{
	$.post('require/jp/jpLogin.php',//para pegar um arquivo em uma pasta
		{
			email:$('#eLogin').val(), //pegando valores das variáveis do arquivo da pasta buscada
			senha:$('#sLogin').val()
		},function(res)
		{
			if(res)
				$('main form span').html(res).css({color:'#f00'}); //aplicando efeito ou texto no form (e cascateando divs) que chama essa função.
			else
				//$('main form span').html('Logado com sucesso!!!').css({color:#069});
				location.href='../../admin/'
		});
}