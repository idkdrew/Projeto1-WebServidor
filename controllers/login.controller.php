<?php
    session_start();
    require_once('models/usuario.model.php');

    $acao = $_GET['acao'] ?? 'index';
    if (isset($_SESSION["userlogado"]) && $acao === 'index') {
        $user = unserialize($_SESSION["userlogado"]);
        if($user->getUsername() == 'admin'){
            header("Location: admin.php"); 
            exit;
        }
        header("Location: perfil.php"); 
        exit;
    }

    
    require('views/login.view.php');


    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if($username == '' || $password == ''){
            header('Location: login.php?acao=erro-campos');
            exit;
        }else if($username == 'admin' && $password == 'urubu'){
            $_SESSION['userlogado'] = serialize(new Usuario("admin", "admin", "urubu"));
            header("Location: login.php?acao=logaradmin");
            exit;
        }else if(isset($_SESSION["user"])){
            $listausuarios = $_SESSION['user'];
            foreach ($listausuarios as $usuarioserialize) {
                $usuario = unserialize($usuarioserialize);
                if($usuario->getUsername() === $username){
                    $_SESSION['userlogado'] = $usuarioserialize;
                    header("Location: login.php?acao=logar");
                    exit;
                }
            }
            header("Location: login.php?acao=credenciais-erro");
            exit;          
        } else {
            header("Location: login.php?acao=credenciais-erro");
            exit;
        }
    }
    

?>