<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Urubu</title>
    <link rel="stylesheet" href="styleAdmin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <?php require('controllers/admin.controller.php'); 
    $acao = $_GET['acao'] ?? 'index';

    
    

    if($acao === 'logoff'){
		header('Location: index.php');
	}else if($acao == 'lanca-produto'){
        header('Location: admin.php?acao=aprovado');
    }

    ?>
</body>
</html>