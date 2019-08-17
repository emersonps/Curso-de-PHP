function doc(el) {
	$('main form *').val('');

	var nome = $('#nomerazao'),
		genero = $('#genero'),
		nascimento = $('#nascimento'),
		documento = $('#documento'),
		fixocomercial = $('#fixocomercial');
		ddd = $('#ddd');
		celular = $('#celular');


	if($(el).val() == 'cpf')
	{
		nome.attr('placeholder','Nome/Sobrenome').focus();
		genero.removeAttr('disabled');
		nascimento.removeAttr('disabled');
		//documento.attr('maxlenght',14).attr('placeholder','CPF*').attr('onKeyUp','maskCpf(this)');
		documento.attr({
			maxlength:14,
			placeholder: 'CPF*',
			onKeyUp: 'maskCpf(this)'
		});
		fixocomercial.attr({
			placeholder: 'Fixo',
			maxlength: 9,
		});
	}
	
	if($(el).val() == 'cnpj')
	{
		nome.attr('placeholder','Razão Social').focus();
		genero.attr('disabled',true);
		nascimento.attr('disabled',true);
		documento.attr({
			maxlength: 18,
			placeholder: 'CNPJ*',
			onKeyUp: 'maskCnpj(this)'
		});
		fixocomercial.attr({
			placeholder: 'Comercial',
			maxlength: 9,
		});	
	}	
}

function cadastrar()
{
	$.post('/require/jp/jpcad-cliente.php',
	{
		doc:$('input[name=doc]').val(),
		nomerazao:$('#nomerazao').val(),
		genero:$('#genero').val(),
		nascimento:$('#nascimento').val(),
		documento:$('#documento').val(),
		ddd:$('#ddd').val(),
		fixocomercial:$('#fixocomercial').val(),
		celular:$('#celular').val(),
		cep:$('#cep').val(),
		estado:$('#estado').val(),
		cidade:$('#cidade').val(),
		bairro:$('#bairro').val(),
		endereco:$('#endereco').val(),
		numero:$('#numero').val(),
		complemento:$('#complemento').val(),
		observacoes:$('#observacoes').val(),
		email:$('#email').val(),
		senha:$('#senha').val(),
		rSenha:$('#rSenha').val()
	},function(res){
		var msg=$('.msg-cad'),
			formAll=$('main form *');
		if(res)
		{
			msg.slideDown().html(res).css({background:'#ff3131'});
		}
		else
		{
			msg.html('Cadastro realizado com sucesso!').css({background:'#069'});
			formAll.val('');			
			setTimeout(function(){location.href='/cad-log';},1000);
			// setTimeout(function(){msg.slideUp();},1000);
		}
	});	
}