<?php
session_start();
include("connectionDB.php");

$nome = mysqli_real_escape_string($connection, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($connection, trim($_POST['user']));
$senha =  mysqli_real_escape_string($connection, trim($_POST['senha']));


$sql = "select count(*) as total from usuarios where nome_usuario = '$nome'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
echo $row['total'];

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: signup_user.php');
	exit;
}

$sql = "INSERT INTO usuarios (nome_usuario, login_usuario, senha, created_at) VALUES ('$nome', '$usuario', '$senha', NOW())";

if($connection->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$connection->close();


?>
<html>
<head>
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
                <li><a href="#">Contato</a></li>
                <li><a id="login_li" href="./logout.php" color="red">Sair</a></li>
            </ul>
        </nav>
    </header>
	<main>
	<section class="conteudo">
		<h1>Funcionário cadastrado com sucesso!</h1>
		<p>O que você deseja fazer agora?</p>
		<div class="div_buttons">
                            <a href="sign_user.php">
                                <input class="button" type="submit" value="Cadastrar Novo Funcionário" name="submit" id=""/></a>
                            <a href="signup_client.php">
                                <input class="button" type="submit" value="Cadastrar Cliente" name="submit" id=""/></a>
                            <a href="index.php">
                                <input class="button" type="submit" value="Sair" name="submit" id=""/></a>
       </div>
	</section>
	</main>
	</body>
</html>