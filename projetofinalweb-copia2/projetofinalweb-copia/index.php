<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<script src="script.js" defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


	<!-- BootStrap Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<!-- fechar BootsStrap icons -->

	<title>Urubu do pix</title>
</head>

<body>
	<header>
		<div class="container">
			<div class="brand">
				<div class="logo">
					<a href="index.html">
						<img src="logo.png" width="200px">
						<div class="logo-text">
							<p class="big-logo">UrubuDoPix</p>
							<p class="small-logo">pagando horrores</p>
						</div>
					</a>
				</div> <!-- logo -->
				<div class="shop-icon">
					<div class="btn-social">
						<a href="cadastro.html"><button><i class="bi bi-person"></i></button></a>
					</div>
					<div class="btn-social">
						<a href="checkout.html"><button><i class="bi bi-cart-fill"><span
										class="item-count"></span></i></button></a>
					</div>
				</div> <!-- shop icons -->
			</div> <!-- brand -->

			<div class="menu-bar">
				<div class="menu">
					<ul>
						<li><a href="index.html">Inicio</a></li>
						<li><a href="compras.html">Comprar</a></li>
						<li><a href="#">Sobre</a></li>
						<li><a href="#">Contato</a></li>
					</ul>
				</div>
			</div> <!-- menu -->
		</div> <!-- container -->
	</header> <!-- header -->


	<div class="container">
		<main>
			<div id="carousel">
				<div class="carousel-item">
					<img src="imagensCompras/urubu1.jpeg" alt="Imagem 1">
				</div>
				<div class="carousel-item">
					<img src="imagensCompras/urubu2.jpg" alt="Imagem 2">
				</div>
				<div class="carousel-item">
					<img src="imagensCompras/urubu3.webp" alt="Imagem 3">
				</div>
			</div>
			<div class="new-product-section">
				<div class="product-section-heading">
					<h2>Produtos em destaque</h2>
					<h3>Nossos produtos mais comprados</h3>
				</div>
				<div class="product-content">
					<div class="product">
						<a href="product.html">
							<img src="imagensCompras/Curso.webp">
						</a>
						<div class="product-detail">
							<h3>Curso Online</h3>
							<h2>Aprenda a vender no orgânico!</h2>
							<a class="add-to-cart" href="javascript:void(0);" data-product-id="2">Adicionar ao
								Carrinho</a>
							<p>R$300,00</p>
						</div>
					</div>
					<div class="product">
						<a href="product.html">
							<img src="imagensCompras/instagram.jpg">
						</a>
						<div class="product-detail">
							<h3>Seguidores no instagram</h3>
							<h2>15.000 seguidores</h2>
							<a class="add-to-cart" href="javascript:void(0);" data-product-id="1">Adicionar ao
								Carrinho</a>
							<p>R$500,00</p>
						</div>
					</div>
					<div class="product">
						<a href="product.html">
							<img src="imagensCompras/urubu3.webp">
						</a>
						<div class="product-detail">
							<h3>Tabela do Pix do Urubu</h3>
							<h2>R$250 retorna R$2500</h2>
							<a class="add-to-cart" href="javascript:void(0);" data-product-id="4">Adicionar ao
								Carrinho</a>
							<p>R$ 250,00</p>
						</div>
					</div>
					<div class="product">
						<a href="product.html">
							<img src="imagensCompras/urubu3.webp">
						</a>
						<div class="product-detail">
							<h3>Tabela do Pix do Urubu</h3>
							<h2>R$200 retorna R$2000</h2>
							<a class="add-to-cart" href="javascript:void(0);" data-product-id="3">Adicionar ao
								Carrinho</a>
							<p>R$ 200,00</p>
						</div>
					</div>
				</div>
			</div> <!-- Recommend Product Section -->
		</main> <!-- Main Area -->
	</div>

	<footer>
		<div class="contact-info">
			<h3>Entre em Contato</h3>
			<p>Endereço: Rua ABC, 123</p>
			<p>Email: contato@sualoja.com</p>
			<p>Telefone: (11) 1234-5678</p>
		</div>
	</footer>
</body>

</html>