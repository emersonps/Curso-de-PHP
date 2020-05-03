<?php 
	$prodh = $conexao->select('*', 'produtos', 'LIMIT 0,2', ['']);
	$prodb = $conexao->select('*', 'produtos', 'LIMIT 2,9', ['']);
?>


<link type="text/css" rel="stylesheet" href="/require/css/home.css" />
<div>
</div>

<aside>
	<?php 
		foreach($prodh as $produto_head): 
	?>
	<div>
		<figure><a href=""><img src="/require<?=PRODUTO?>prod<?=$produto_head['id']?>.png" /></a></figure>
		<figcaption>
			<ul>
				<li><a href=""><?= $produto_head['produto']?></a></li>
				<li><?= $produto_head['descricao'] ?></li>
				<li><a href="" class="link">Galeria</a></li>
				<li><a href="" class="link">Tamanhos</a></li>
				<li>de: <span>R$ <?= $produto_head['preco'] ?></span></li>
				<li>por: <span>R$ <?= $produto_head['preco'] - ($produto_head['preco']*$produto_head['desconto']/100) ?></span></li>
				<li>parcelamos em até <span><?= $produto_head['parcela']?>x</span></li>
				<li>via <?= $produto_head['forma_pgto'] ?> desc. de <span>10%</span></li>
			</ul>
		</figcaption>
	</div>
	<?php endforeach; ?>	
</aside>

<nav>
	<ul>
		<li>
			<i class="fa fa-location-arrow"></i> Objetivos
			<ul>
				<li><a href="">Visão</a></li>
				<li><a href="">Foco</a></li>
				<li><a href="">Meta</a></li>
			</ul>
		</li>
	</ul>

	<ul>
		<li>
			<i class="fa fa-shopping-cart"></i> Produtos
			<ul>
				<li><a href="">Placas Decorativas</a></li>
				<li><a href="">Canecas Personalizadas</a></li>
				<li><a href="">Papel de Parede Adesiva</a></li>
				<li><a href="">Camisas</a></li>
				<li><a href="">Sapatos Masculinos</a></li>
				<li><a href="">Sapatos Femininos</a></li>
			</ul>
		</li>
	</ul>
</nav>

<div>
	<div>
	<?php foreach($prodb as $produto_body): ?>
		<div>
			<figure><img src="/require<?=PRODUTO?>prod<?= $produto_body['id'] ?>.png"></figure>
			<figcaption>
				<ul>
					<li>.....................................................</li>
					<li><?= $produto_body['produto'] ?></li>
					
					<?php if($produto_body['desconto']>0){ ?>
						<li>de: <span>R$ <?= $produto_body['preco'] ?></span></li>
					<?php }else{ ?>
						<li></li>
					<?php };  ?>
					
					<li>por: <span>R$ <?= $produto_body['preco']-($produto_body['preco']*$produto_body['desconto']/100) ?></span></li>
					<li><span><?= $produto_body['parcela']?>x</span> sem juros</li>
					<li>via <?= $produto_body['forma_pgto'] ?> desc. de <span>10%</span></li>
				</ul>
			</figcaption>	
		</div>
		<?php endforeach; ?>
	</div>

	<aside>
	</aside>
</div>