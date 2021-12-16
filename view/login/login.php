<?php
session_start();
include("../../Model/conexao.php");




if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nivel from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";



$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nivel'] = $usuario_bd['nivel'];
    //print_r($_SESSION['nivel']);
    //exit();
	header('Location: ../../index.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}