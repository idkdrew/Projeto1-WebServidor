<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="styleCadastro.css">


	<title>Cadastro Urubu do pix</title>
</head>

<body>
	
	<?php 
	require('controllers/cadastro.controller.php'); 
	$acao = $_GET['acao'] ?? 'index';

	if($acao == 'cadastrar'){
		header('Location: login.php?acao=cadastrou');
	}
	?>

</body>

</html>