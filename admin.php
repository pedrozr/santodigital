<!DOCTYPE html>
<html="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" href="./styles/admin.css" />
        <title>Admistração</title>
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
                    Admistração
                </h1>
                <div class="inputs">
                    <section class="caixa">
                        <div class="div_buttons">
                            <a href="signup_client.php">
                                <input class="button" type="submit" value="Cadastrar Cliente" name="submit" id=""/></a>
                            <a href="signup_user.php">
                                <input class="button" type="submit" value="Cadastrar Funcionário" name="submit" id=""/></a>
                            <a href="mostrarClientes.php">
                                <input class="button" type="submit" value="Banco de Dados" name="submit" id=""/></a>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p class="copyright">EQUIPE CLOUD+ © 2021</p>
    </footer>
    </body>
</html>
