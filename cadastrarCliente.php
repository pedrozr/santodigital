<?php
session_start();
include("connectionDB.php");


$codigo = mysqli_real_escape_string($connection, trim($_POST['codigo']));
$nome = mysqli_real_escape_string($connection, trim($_POST['nome']));
$telefone = mysqli_real_escape_string($connection, trim($_POST['phone']));




$sql = "select count(*) as total from clientes where codigo = '$codigo'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);



if($row['total'] == 1) {
	$_SESSION['cliente_existe'] = true;
	header('Location: signup_client.php');
	exit; 
}








$sql = "INSERT INTO clientes (codigo, nome_cliente, telefone_cliente, created_at) VALUES ('$codigo', '$nome', '$telefone', NOW())";


if($connection->query($sql) === TRUE && $_SESSION['cliente_existe']===false) {
	$_SESSION['status_cadastro'] = true;
	$msg = "Cadastro realizado com sucesso!";
}

$connection->close();

//header('Location: signup_client.php');
//exit;
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
		<h1>Cliente cadastrado com sucesso!</h1>
		<p>O que você deseja fazer agora?</p>
		<div class="div_buttons">
                            <a href="signup_client.php">
                                <input class="button" type="submit" value="Cadastrar Novo Cliente" name="submit" id=""/></a>
                            <a href="mostrarClientes.php">
                                <input class="button" type="submit" value="Visualizar Clientes Cadastrados" name="submit" id=""/></a>
                            <a href="index.php">
                                <input class="button" type="submit" value="Sair" name="submit" id=""/></a>
       </div>
	</section>
	</main>
	</body>
</html>