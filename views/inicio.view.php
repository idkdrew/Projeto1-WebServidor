<?php
include'header.php'; 
?>

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
					<?php
						session_start();
						require_once('models/produto.model.php');
						if (isset($_SESSION['produto'])) {
							foreach($_SESSION['produto'] as $produto){
								$produto = unserialize($produto);
							?>
							<div class="product">
								<a href="product.html">
									<img src="imagensCompras/Curso.webp">
								</a>
								<div class="product-detail">
									<h3><?php echo $produto->getTitle()?></h3>
									<h2><?php echo $produto->getDescription()?></h2>
									<a class="add-to-cart" href="javascript:void(0);" data-product-id="2">Adicionar ao
										Carrinho</a>
									<p>R$<?php echo $produto->getPrice()?></p>
								</div>
							</div>
							<?php
							}
						}
					
					?>
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