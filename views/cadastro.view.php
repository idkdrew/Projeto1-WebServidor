<?php
    include 'header.php';
?>

<style>

</style>

<div class = "container-cad">
    <h2>Cadastro</h2>
    <form action="cadastro.php?acao=cadastrar" method="POST">
        <div class="form-group">
            <label for="name">Nome Completo:</label>
            <input type="text" id="name" name="name"><br><br>
        </div>
        <div class="form-group">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username"><br><br>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password"><br><br>
        </div>
        <input type="submit" value="CADASTRAR">
    </form>
    
    <?php 
            $acao = $_GET['acao'] ?? 'index';

            if($acao == 'erro-campos'){
                echo '<div class="error-message">Preencha todos os campos!</div>';
            } else if($acao == 'erro-duplicado'){
                echo '<div class="error-message">Username já existente!</div>';
            }
    ?>

    </div>