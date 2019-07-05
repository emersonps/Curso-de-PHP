<?php
	require_once "require/class/CRUD.class.php";
	require_once "require/config/config.php";
	
	$r_QueryString = explode('/',substr(REDIRECT_QUERY_STRING,3));
	$urlAmigavel = new UrlAmigavel;
?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Ideal Placas Decorativas</title>
		<link rel="stylesheet" type="text/css" href="/require/css/header.css" />
		<link rel="stylesheet" href="/require/fontawesome/css/all.css" />
		<script type="text/javascript" src="/require/js/jquery.js"></script>
		<script type="text/javascript" src="/require/js/login.js"></script>
	</head>

	<body>
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3"></script>
		
		<header>
			<div>
				<ul>
					<li><a href=""><i class="fa fa-truck"></i> Frete Grátis</a></li>
					<li><a href=""><i class="fa fa-phone"></i> Central de Atendimento</a></li>
					<li><a href=""><i class="fa fa-exchange-alt"></i> Saiba sobre as regras de devolução</a></li>
				</ul>
			</div>

			<div>
				<figure>
					<a href="/"><img src="/require<?=LOGO?>logo-idealplacas.png"></a>	
				</figure>

				<form>
					<input type="search" class="inputButton input" value="Busca por Produtos, Categorias, Subcategorias, Modelos, etc..."/>
					<button class="button inputButton">Buscar</button>
				</form>

				<section>
					<figure>
						<i class="fa fa-shopping-cart fa-2x" title="Meu Carrinho"></i>
						<figcaption title="Meu Carrinho">3</figcaption>
					</figure>

					<figure>
						<a href="/cad-log"><i class="fa fa-user fa-2x" title="Acessar Minha Conta"></i></a>
					</figure>
				</section>

				<nav>
					<ul>
						<li><a href="">Oferta do Dia</a></li>
						<!-- Submenus -->
						<?php
							$itensMenu = array('Placas','Clientes','Modelos','Vídeos','Galeria','Pedidos','Devolução','Frete','Varejo','Atacado');
							
							foreach ($itensMenu as $itensMenu) 
							{
						?>
						<li>
							<a href=""><?= $itensMenu ?></a>
							<ul>
								<figure>
									<img src="/require<?=PRODUTO?>prod1.png">
									<figcaption>
										<p>PlacasDecorativa - MDF</p>
										<span>
											<?php 
												$desc='Nossas placas são produzidas em MDF de 3, 4 e 12mm, impressão em Vinil, ou seja, além de ter qualidade de imagem, a placa pode ser limpo com pano úmido e não mancha.'; 
												print substr($desc, 0,120).'...';
											?>
										</span>

										<a href="" class="link">Confira esta Oferta</a>
									</figcaption>
								</figure>
								<li><a href="">Material: MDF</a></li>
								<li><a href="">Impressão: Vinil</a></li>
								<li><a href="">Tamanho: Diversos</a></li>
								<li><a href="">Preço: conforme o tamanho</a></li>
								<li><a href="">Resistente a respingo de água.</a></li>
							</ul>	
						</li>
						<?php }; ?>

						<li><a href="">Blog</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<main>