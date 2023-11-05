<?php
	
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'db_sistema_pets');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não conectou!!');

?>