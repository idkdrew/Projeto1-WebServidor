<?php
require('views/admin.view.php');
require_once('models/produto.model.php');
require_once('models/usuario.model.php');


$acao = $_GET['acao'] ?? 'index';
if (isset($_SESSION["userlogado"])) {
    if($acao != "aprovado" && $acao!="lanca-produto" && $acao!="logoff"){
        $user = unserialize($_SESSION["userlogado"]);
        if($user->getUsername() == 'admin'){
            header("Location: admin.php?acao=aprovado");
            exit;
        }
        header("Location: index.php"); 
        exit;
    }
}else{
    header("Location: index.php"); 
    exit;
}


    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if($acao === "lanca-produto"){
            $id = $_POST['id-produto'] ?? '';
            $title = $_POST['nome-produto'] ?? '';
            $description = $_POST['descricao-produto'] ?? '';
            $price = $_POST['preco-produto'] ?? '';

            if($title == '' || $description == '' || $price == ''){
                header('Location: admin.php?acao=erro-campos');
                exit;
            }else{
                if (isset($_SESSION['produto'])) {
                    foreach($_SESSION['produto'] as $produtoserialize){
                        $produto = unserialize($produtoserialize);
                        if($produto->getId() === $id){
                            header('Location: admin.php?acao=erro-duplicado');
                            exit;
                        }
                    }
                    array_push($_SESSION['produto'], serialize(new Produto($id, $title, $description, $price)));
                } else {
                    $_SESSION['produto'] = array(
                        serialize(new Produto($id, $title, $description, $price))
                    );
                }
            }
        }else if($acao === "logoff"){
            unset($_SESSION['userlogado']);
        }
        

    }

    
?>