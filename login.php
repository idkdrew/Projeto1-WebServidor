<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styleLogin.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

	<title>Login Urubu do pix</title>
</head>

<body>	

	<?php require('controllers/login.controller.php'); 

		$acao = $_GET['acao'] ?? 'index';

		if($acao == 'logar'){
			header('Location: login.php');
		}else if($acao == 'logaradmin'){
			header('Location: admin.php');
		}

	?>

</body>

</html>