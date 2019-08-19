<link rel="stylesheet" type="text/css" href="../require/css/admin/home.css" />

<table>
	<caption><img src=/../require/img/projeto/meus-pedidos.png> Meus Pedidos</caption>
	<tr>
		<th>Nº</th>
		<th>Data</th>
		<th>Valor (R$)</th>
		<th>Status</th>
	</tr>

<?php
for($i=0;$i<5;$i++)
{

?>
	<tr class=rd>
		<td>Placa 23x17</td>
		<td>10/01/2019</td>
		<td>R$ 20,00</td>
		<td><i class="fa fa-truck"></i></td>
	</tr>
<?php } ?>
</table>

<div>
	<p><img src=../require/img/projeto/mensagem.png> Mensagem</p>
	<form>
		<span>Olá, tudo bem?</span>
		<input type="text" class="input inputButton" placeholder="digite a mensagem e tecle Enter">
	</form>
	<aside>
		lista dos clientes 
	</aside>
</div>