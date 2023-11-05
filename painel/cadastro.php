<?php

include("conexao.php");

	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sqlInsert = "INSERT INTO tb_cadastro_usuario (ID_USUARIO, USUARIO, EMAIL, SENHA, DATA_CADASTRO, ATIVO)
	VALUES ('null', '$usuario', '$email', '$senha', NOW(), 'SIM')";

	if(mysqli_query($conexao, $sqlInsert)){
		echo("<h1>Cadastro realizado com sucesso!</h1>");
	}
	else{
		echo("Error:".$sqlInsert."<br>".mysqli_error($conexao));
	}
	header('Location: ../painel.php');

?>