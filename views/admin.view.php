    <?php
        require_once('models/produto.model.php');
        require_once('models/usuario.model.php');

    ?>



    <div class="admin-panel">
        <form class="form-sair" action="admin.php?acao=logoff" method = "POST">
            <input class="sair" type="submit" value="Sair">
        </form>
        <h2>Administração do Site</h2>
        <div class="tabs">
            <button class="tablinks active" onclick="openTab(event, 'criar-produto')">Criar Produto</button>
            <button class="tablinks active" onclick="openTab(event, 'lista-produto')">Lista de Produtos</button>
            <button class="tablinks active" onclick="openTab(event, 'lista-usuario')">Lista de Usuarios</button>
        </div>

        <div id="criar-produto" class="tabcontent" style="display: block;">
            <h3>Criar Novo Produto</h3>
            <form action="admin.php?acao=lanca-produto" method = "POST">
                <label for="id-produto">Id do Produto:</label>
                <input type="text" id="id-produto" name="id-produto" ><br><br>

                <label for="nome-produto">Nome do Produto:</label>
                <input type="text" id="nome-produto" name="nome-produto" ><br><br>

                <label for="descricao-produto">Descrição:</label><br>
                <textarea id="descricao-produto" name="descricao-produto" rows="4" cols="50" ></textarea><br><br>

                <label for="preco-produto">Preço:</label>
                <input type="number" id="preco-produto" name="preco-produto" ><br><br>

                <button type="submit">Criar Produto</button>
            </form>
        </div>

        <?php 
            $acao = $_GET['acao'] ?? 'index';

            if($acao == 'erro-campos'){
                echo '<div class="error-message">Preencha todos os campos!</div>';
            } else if($acao == 'erro-duplicado'){
                echo '<div class="error-message">Username já existente!</div>';
            }
        ?>

        <div id="lista-produto" class="tabcontent" style="display: block;">
            <h3>Lista de Produtos</h3>
            <table class="table">
                <tr>
                    <th><h3>ID</h3></th>
                    <th><h3>Título</h3></th>
                    <th><h3>Descrição</h3></th>
                    <th><h3>Preço</h3></th>
                </tr>
                <?php
                    session_start();
                    if(isset($_SESSION["produto"])){
                        foreach($_SESSION["produto"] as $produto){
                            $produto = unserialize($produto);
                            ?>
                                <tr>
                                    <td><h3><?php echo $produto->getId()?></h3></td>
                                    <td><h3><?php echo $produto->getTitle()?></h3></td>
                                    <td><h3><?php echo $produto->getDescription()?></h3></td>
                                    <td><h3>R$<?php echo $produto->getPrice()?></h3></td>
                                </tr>
                            <?php
                        }
                    }
                    
                
                ?>

            </table>
        </div>

        <div id="lista-usuario" class="tabcontent" style="display: block;">
            <h3>Lista de Usuarios</h3>
            <table class="table">
                <tr>
                    <th><h3>Username</h3></th>
                    <th><h3>Nome</h3></th>
                    <th><h3>Senha</h3></th>
                </tr>
                <?php
                    if(isset($_SESSION["user"])){
                        foreach($_SESSION["user"] as $user){
                            $user = unserialize($user);
                            ?>
                                <tr>
                                    <td><h3><?php echo $user->getUsername()?></h3></td>
                                    <td><h3><?php echo $user->getName()?></h3></td>
                                    <td><h3><?php echo $user->getPassword()?></h3></td>
                                </tr>
                            <?php
                        }
                    }
                    
                
                ?>
            </table>
        </div>

    </div>
    <script>
        function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    document.getElementsByClassName("tablinks")[0].click(); // Open the first tab by default

    </script>