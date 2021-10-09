<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles/home.css"/>
        <title>TechEducation</title>
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
                <li><a href="login_employee.php">Admistração</a></li>
                <li><a href="contact.php">Contato</a></li>
                <li><a id="login_li" href="./login_employee.php">Entrar</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="conteudo">
            <div class="texto_inicio">
                <h1 class="titulo">
                    Cursos de Tecnologia e Gerenciamento de Negócios
                </h1>
                <p>
                    Conheça a metodologia de sucesso que já ajudou muitas
                    empresas e startups. Capacitar seu time em tecnologia,
                    dados, métodos ágeis e negócios digitais. Foco na prática.
                    Engajamento profissional. Capacitação contínua. Evolua
                    sua equipe.
                </p>
                <button class="button">Saiba Mais</button>
            </div>
            <img id="img_inicio" src="./images/Sodit-cloud-computing-icon-cloud 1@2x.png" alt="Imagem ilustrativa de cloud computing ">
        </section>
    </main>
    <footer>
        <p class="copyright">EQUIPE CLOUD+ © 2021</p>
    </footer>
    <script src="/js/mobile-navbar.js"></script>
    </body>
</html>
