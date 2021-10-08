<?php
session_start();
include('connectionDB.php');

if(empty($_POST['user']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($connection, $_POST['user']);
$senha = mysqli_real_escape_string($connection, $_POST['senha']);

$query = "select nome_usuario from usuarios where login_usuario = '{$usuario}' and senha = ('{$senha}')";

$result = mysqli_query($connection, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome'];
	header('Location: admin.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}
?>