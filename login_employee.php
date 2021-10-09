<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="./styles/forms.css" />
        <title>Entrar</title>
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
                <li><a href="index.php">Início</a></li>
                <li><a href="#">Admistração</a></li>
                <li><a href="./contact.php">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="conteudo">
            <div class="div_section">
                <h1 class="titulo" id="login_title">
                    Login de Funcionários
                </h1>
                <div class="inputs">
                    <form action="loginUser.php" method="post">
                        <div class="field">
                            <label>Nome de Usuário:</label><br>
                            <input class="input_text" type="text" value="" name="user"/><br>
                        </div>
                        <div class="field">
                            <label>Senha:</label><br>
                            <input class="input_text" type="password" value="" name="senha"/><br>
                        </div>
                        <input class="button" type="submit" value="Entrar" name="submit" id=""/>
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
