<!DOCTYPE html>
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
                <li><a id="login_li" href="./login_employee.php">Sair</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="conteudo">
            <div class="div_section">
                <h1 class="titulo">
                    Cadastro de Funcionário
                </h1>
                <div class="inputs">
                    <form action="cadastrarUser.php" method="POST">
                        <div class="field" id="first_field">
                            <label>Nome:</label><br>
                            <input class="input_text" type="text" value="" name="nome" placeholder="Digite um nome aqui"/><br>
                        </div>
                        <div class="field">
                            <label>Usuário:</label><br>
                            <input class="input_text" type="text" value="" name="user" placeholder="Digite seu login de usuario"/><br>
                        </div>
                        <div class="field">
                            <label>Senha:</label><br>
                            <input class="input_text" type="password" value="" name="senha" placeholder="Senha"/><br>
                        </div>
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
