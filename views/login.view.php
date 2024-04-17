    <?php
    include 'header.php';
    ?>
    <div class="container-log">
        <h2>Login</h2>
        <form action= "login.php?acao=logar" method="POST">
            <div class="form-group">
                <label for="username">Usuário:</label>
                <input type="text" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password">
            </div>
            <input type="submit" value="Entrar">
        </form>
        <p>Não tem conta? <a href="cadastro.php" class="signup-link">Faça seu cadastro</a></p>

        <?php 
            $acao = $_GET['acao'] ?? 'index';

            if($acao == 'erro-campos'){
                echo '<div class="error-message">Preencha todos os campos!</div>';
            }else if($acao == 'credenciais-erro'){
                echo '<div class="error-message">Credenciais Incorretas!</div>';
            }

        ?>
    </div>


    