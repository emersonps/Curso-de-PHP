<link type=text/css rel=stylesheet href=/require/css/cad-cliente.css />
<script type=text/javascript src=/require/js/cad-cliente.js></script>

<div>
	<div>
		<label><input type=radio name=doc value=cpf onclick=doc(this) checked/>PESSOA FÍSICA</label>
		<label><input type=radio name=doc value=cnpj onclick=doc(this) />PESSOA JURÍDICA</label>
		
		<form action=javascript:void(0)>
			<span class=msg-cad></span>
			<p>Dados</p>

			<label><input type=text class="input inputButton" id=nomerazao placeholder=Nome/Sobrenome* /></label>
			<label>
				<select class=select id=genero>
					<option>Gênero</option>
					<option>Masculino</option>
					<option>Feminino</option>
				</select>
			</label>

			<label><input type=text class="input inputButton" id=nascimento maxlength=10 onkeyup=maskData(this) placeholder=Nascimento /></label>
			<label><input type=text class="input inputButton" id=documento maxlength=14 onkeyup=maskCpf(this) placeholder=CPF* /></label>
			<label><input type=text class="input inputButton" id=ddd maxlength=3 onkeyup=num(this) placeholder=ddd /></label>
			<label><input type=text class="input inputButton" id=fixocomercial maxlength=9 onkeyup=maskTel(this) placeholder=Fixo /></label>
			<label><input type=text class="input inputButton" id=celular maxlength=9 onkeyup=maskTel(this) placeholder=Celular /></label>
			<label><input type=text class="input inputButton" id=cep maxlength=10 onkeyup=maskCep(this) placeholder=CEP* /></label>
			<label>
				<select class=select id=estado>
					<option>Estado*</option>
					<optgroup label=Sudeste>
						<option>São Paulo</option>
						<option>Rio de Janeiro</option>
						<option>Minhas Gerais</option>
					</optgroup>
					<optgroup label=Nordeste>
						<option>Bahia</option>
					</optgroup>	
					<optgroup label=Sul>
						<option>Rio Grande do Sul</option>
					</optgroup>	
					<optgroup label=Norte>
						<option>Amazonas</option>
					</optgroup>	
				</select>
			</label>

			<label><input type=text class="input inputButton" id=cidade placeholder=Cidade* /></label>
			<label><input type=text class="input inputButton" id=bairro placeholder=Bairro* /></label>
			<label><input type=text class="input inputButton" id=endereco placeholder=Endereço* /></label>
			<label><input type=text class="input inputButton" id=numero placeholder=Numero* /></label>
			<label><input type=text class="input inputButton" id=complemento placeholder=Complemento /></label>
			<label><input type=text class="input inputButton" id=observacoes placeholder=Observações /></label>

			<p>Dados Login</p>
			<label><input type=email class="input inputButton" id=email placeholder=E-mail*></label>
			<label><input type=password class="input inputButton" maxlength=12 id=senha placeholder=Senha*></label>
			<label><input type=password class="input inputButton" id=rSenha placeholder="Confirme a Senha"></label>

			<button class="button inputButton" onclick=cadastrar()>CADASTRAR</button>

		</form>
	</dir>
</div>