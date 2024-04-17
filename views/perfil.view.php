<?php
    session_start();
    require_once('models/usuario.model.php');
    include('header.php');
    $user = unserialize($_SESSION["userlogado"]);
    
    ?>

<div class="container-perfil">
        <h2>Perfil</h2>
        <form action= "perfil.php?acao=logoff" method="POST">
            <div class="form-group">
                <label for="name">Nome: <?php echo $user->getName()?></label>
            </div>
            <div class="form-group">
                <label for="username">Usuário: <?php echo $user->getUsername()?></label>
            </div>
            <div class="form-group">
                <label for="password">Senha: <?php echo $user->getPassword()?></label>
            </div>
            <input type="submit" value="Sair">    
        </form>

        <form action= "perfil.php?acao=atualizar" method="POST">
            <input id="alt-dados" type="submit" value="Alterar dados"/>
        </form>

    </div>


    