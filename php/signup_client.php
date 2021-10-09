<?php
   session_start();
?>

<html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/forms.css" />
        <title>Cadastrar Cliente</title>
    </head>
    <body>
    <header>
        <nav>
            <a class="logo" href="./index.php"><img src="./images/TechEducation.png" alt="Logo da empresa"></a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="./index.php">Início</a></li>
                <li><a href="./admin.php">Admistração</a></li>
                <li><a href="./contact.php">Contato</a></li>
                <li><a id="login_li" href="./logout.php" color="red">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="conteudo">
            <div class="div_section">
                <h1 class="titulo">
                    Cadastro de Cliente
                </h1>
                <div class="inputs">
                    <form action="cadastrarCliente.php" method="POST">
                        <div class="field" id="first_field">
                            <label>Código do Cliente:</label><br>
                            <input class="input_text" type="text" value="" name="codigo" placeholder="Digite um nome aqui"/><br>
                        </div>
                        <div class="field" id="first_field">
                            <label>Nome do Cliente:</label><br>
                            <input class="input_text" type="text" value="" name="nome" placeholder="Digite um nome aqui"/><br>
                        </div>
                        <div class="field">
                            <label>Telefone:</label><br>
                            <input class="input_text" type="text" value="" name="phone" placeholder="Ex:.(DDD) 99999-9999"/><br>
                        </div>
                        <?php
                            if(isset($_SESSION['status_cadastro']) && !(isset($_SESSION['nao_cadastrado']))){
                                echo "<div>";
                                echo "<p>Cliente cadastrado com sucesso!</p>";
                                echo "</div>";
                            // }elseif( isset($_SESSION['nao_cadastrado']) && !(isset($_SESSION['status_cadastro']))){
                            //     echo "<div>";
                            //     echo "<p>ERRO: Falha ao cadastrar cliente</p>";
                            //     echo "</div>";
                            }else{
                                echo "<p></p>";
                            }
                        ?>
                        
                        <input class="button" type="submit" value="Cadastrar" name="submit" id=""/>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p class="copyright">EQUIPE CLOUD+ © 2021</p>
    </footer>
    </body>
</html>

