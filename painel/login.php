<?php 

include('conexao.php');

if(empty($_POST['email']) || empty($_POST['password'])){
	header('Location: ../login.html');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);

$query = "select * from tb_cadastro_usuario where email = '{$email}' and senha = '{$password}' ";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row > 0){
	$_SESSION['email'] = $email;
	header('Location: ../painel.php');
	exit();
}else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../recuperar-senha.html');
	exit();
}

?>