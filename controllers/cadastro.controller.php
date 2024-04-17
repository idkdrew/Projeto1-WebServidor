<?php
    session_start();

    require('models/usuario.model.php');
    require('views/cadastro.view.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if($name == '' || $username == '' || $password == ''){
        header('Location: cadastro.php?acao=erro-campos');
        exit;
    } else{
        if (isset($_SESSION['user'])) {
            foreach($_SESSION['user'] as $usuarioserialize){
                $usuario = unserialize($usuarioserialize);
                if($usuario->getUsername() === $username){
                    header('Location: cadastro.php?acao=erro-duplicado');
                    exit;
                }
            }
            array_push($_SESSION['user'], serialize(new Usuario($username, $name, $password)));
        } else {
            $_SESSION['user'] = array(
                serialize(new Usuario($username, $name, $password))
            );
        }

        header('Location: cadastro.php?acao=cadastrar');
         echo '<pre>';
         print_r($_SESSION);
         echo '</pre>';
        exit;
    }
    }
?>