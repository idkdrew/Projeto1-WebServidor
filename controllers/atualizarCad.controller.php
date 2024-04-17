<?php
    session_start();
    require_once('models/usuario.model.php');
    $user = unserialize($_SESSION["userlogado"]);

    require('views/atualizarCad.view.php');

    


    if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'] ?? '';
    $password = $_POST['password'] ?? '';

    if($name == '' || $password == ''){
        header('Location: atualizarCad.php?acao=erro-campos');
        exit;
    } else{
        $listausuarios = $_SESSION['user'];
        $listausuariosatualizada;
            foreach ($listausuarios as $usuarioserialize) {
                $usuario = unserialize($usuarioserialize);

                if($usuario->getUsername() === $user->getUsername()){
                    $usuario = new Usuario($user->getUsername(), $name, $password);
                    $_SESSION['userlogado'] = serialize($usuario);
                }

                if (isset($listausuariosatualizada)) {
                    array_push($listausuariosatualizada, serialize($usuario));
                } else {
                    $listausuariosatualizada = array(
                        serialize($usuario)
                    );
                }              
            }

        $_SESSION['user'] = $listausuariosatualizada;

        header('Location: atualizarCad.php?acao=atualizar');
        // echo '<pre>';
        // print_r($_SESSION);
        // echo '</pre>';
        exit;
    }
    }
?>