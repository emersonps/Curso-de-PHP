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
		<link rel="stylesheet" type="text/css" href="require/css/header.css" />
		<link rel="stylesheet" href="require/fontawesome/css/all.css" />
		<script type="text/javascript" src="require/js/jquery.js"></script>
		<script type="text/javascript" src="require/js/login.js"></script>
	</head>

	<body>
		<header>
			<div>
				<ul>
					<li><a href=""><i class="fa fa-truck"></i> Frete Grátis</a></li>
					<li><a href=""><i class="fa fa-phone"></i> Central de Atendimento</a></li>
					<li><a href=""><i class="fa fa-pencil-ruler"></i> Saiba sobre as regras de devolução</a></li>
				</ul>
			</div>

			<div>
				<figure>
					<a href=""><img src="require<?=LOGO?>logo-idealplacas.png" width="100px"></a>	
				</figure>

				<form>
					<input type="search" class="" />
					<button class="">Buscar</button>
				</form>

				<section>
					<figure>
						<i class="fa fa-shopping-cart fa-2x" title="Meu Carrinho"></i>
						<figcaption title="Meu Carrinho">3</figcaption>
					</figure>

					<figure>
						<a href="/login"><i class="fa fa-user fa-2x" title="Acessar Minha Conta"></i></a>
					</figure>
				</section>

				<nav>
					<ul>
						<li>
							<a href="">Oferta do Dia</a>
						</li>
						<!-- Submenus -->
						<?php
							$itensMenu = array('Massa Muscular','Próteínas','Vitaminas','Energia','Acessórios','Massa Muscular','Energia');
							
							foreach ($itensMenu as $itensMenu) {
						?>
							<li>
								<a href=""><?= $itensMenu ?></a>
								<ul>
									<figure>
										<img src="require<?=PRODUTO?>zma.png">
										<figcaption>
											<p>ZMA - 90 Cápsulas - Optium Nutrition</p>
											
											<span>
												<?php 
													$desc='O ZMA é um suplemento alimentar vitamínico, uma combinação de zinco, magnésio e vitamina B6. Um suplemento efetivo para aumento da recuperação, força e resultando em ganho de massa muscular.'; 
													print substr($desc, 0,100).'...';
												?>
											</span>

											<a href="">Confirmar esta Oferta</a>
										</figcaption>
									</figure>
									<li><a href="">BCA</a></li>
									<li><a href="">Pré-Hormonais</a></li>
									<li><a href="">Pré-Treinos</a></li>
									<li><a href="">ZMA</a></li>
									<li><a href="">Packs</a></li>
								</ul>	
							</li>
						<?php }; ?>

						<li>
							<a href="">Blog</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>

		<main>