<?php
session_start();
//conexao
require_once 'db_connect.php';
if(isset($_POST['btn_cadastrar'])){
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
	$email = mysqli_escape_string($connect, $_POST['email']);
	$idade = mysqli_escape_string($connect, $_POST['idade']);

	$sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUES ('$nome', '$sobrenome', '$email', '$idade')";
	if(mysqli_query($connect,$sql)){
		$_SESSION['mensagem'] = "cadastrado com sucesso!";
		header('Location: ../index.php');
	}else{
		$_SESSION['mensagem'] = "erro ao cadastrar!";
		header('Location: ../index.php');
	}
}
