<?php
    include('header.php');
    require_once('models/usuario.model.php');
    $user = unserialize($_SESSION["userlogado"]);
?>


<div class = "container-att">
    <h2>Atualização de Perfil</h2>
    <form action="atualizarCad.php?acao=atualizar" method="POST">
        <div class="form-group">
            <label for="name">Nome Completo:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($user->getName(), ENT_QUOTES); ?>">
        </div>
        <div class="form-group">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" disabled value=<?php echo $user->getUsername()?>><br><br>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" value=<?php echo $user->getPassword()?>><br><br>
        </div>
        <input type="submit" value="Atualizar Dados">
    </form>
    
    <?php 
            $acao = $_GET['acao'] ?? 'index';

            if($acao == 'erro-campos'){
                echo '<div class="error-message">Preencha todos os campos!</div>';
            }
    ?>

    </div>