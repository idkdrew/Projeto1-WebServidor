<?php

    require('views/perfil.view.php');
    $acao = $_GET['acao'] ?? 'index';

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if($acao ==='logoff'){
            session_start();
            unset($_SESSION['userlogado']);
            header('Location: index.php');
            exit;
        }else if($acao ==='atualizar'){
            header('Location: perfil.php?acao=atualizar');
            exit;
        }
    }
?>