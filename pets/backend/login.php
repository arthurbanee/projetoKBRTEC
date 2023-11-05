<?php 

include('conexao.php');

if(empty($POST['email'])) || empty($_POST['senha'])){
	header('Location: index.php');
	exit();
}

$email = mysql_real_escape_string($conexao, $_POST['email']);
$senha = mysql_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuarios where email = '{email}' and senha = '{senha}' ";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row > 0){
	$_SESSION['email'] = $email;
	header('Location: painel.html');
	exit();
}else{
	$_SESSION['nao_autenticado'] = true;
	header('Location: painel.html')
	exit();
}

?>