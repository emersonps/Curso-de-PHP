function vCampos(el,er)//er-expressao regular
{
	var e=$(el).val().replace(er,'');//er seja trocada por nada DDD
		$(el).val(e);
}

function num(el)
{
	vCampos(el, /[^0-9]/g);
}

function maskTel(el)
{
	vCampos(el,/[^0-9\-]/g);

	var e=$(el).val();

	if(event.keyCode!=8)
	{
		if(e.length==4)
			$(el).val(e+'-');
	}	
}

function maskData(el){
	vCampos(el,/[^0-9\/]/g);

	var e=$(el).val();
// 08/08/2019
	if(event.keyCode!=8){
		if(e.length==2)
			$(el).val(e+'/');
		if(e.length==5)
			$(el).val(e+'/');		
	}
}

function maskCpf(el){
	vCampos(el,/[^0-9\.\-]/g);

	var e=$(el).val();
	//000.000.000-00
	if(event.keyCode!=8){
		if(e.length==3)
			$(el).val(e+'.');
		if(e.length==7)
			$(el).val(e+'.');
		if(e.length==11)
			$(el).val(e+'-');		
	}
}

function maskCnpj(el)
{
	//00.000.000/0000-00
	vCampos(el,/[^0-9\.\/\-]/g);

	var e=$(el).val();

	if(event.keyCode!=8){
		if(e.length==2)
			$(el).val(e+'.');
		if(e.length==6)
			$(el).val(e+'.');
		if(e.length==10)
			$(el).val(e+'/');
		if(e.length==15)
			$(el).val(e+'-');
	}
}

function maskCep(el)
{
	//00.000-000
	vCampos(el,/[^0-9\.\-]/g);

	var e=$(el).val();

	if(event.keyCode!=8){
		if(e.length==2)
			$(el).val(e+'.');
		if(e.length==6)
			$(el).val(e+'-');
	}
}

