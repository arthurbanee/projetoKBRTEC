<?php

if(!empty($_GET['ID_USUARIO'])){
	include('../backend/conexao.php');

	$id = $_GET['ID_USUARIO'];

	$sqlSelect = "SELECT * FROM tb_cadastro_usuario WHERE ID_USUARIO=$id";

	$result = $conexao->query($sqlSelect);

	if($result->num_rows > 0){
		$sqlDelete = "UPDATE tb_cadastro_usuario SET ATIVO = 'NAO' WHERE ID_USUARIO=$id";
		$resultDelete = $conexao->query($sqlDelete);
	}
}
	header('Location: ../painel/painel.php');

/*

Doc - 31/10

- Código para realizar a consulta no banco de dados e deletar caso a váriavel ID seja igual o ID do usuário selecionado.

- Porém, na página "painel.php" o href da linha 203 está dando 'The requested URL was not found on this server.' talvez algum diretório possa estar errado.


Doc - 01/11 

- Código ajustado, porém ao invés de deletar o usuário, atualizaremos a sua situção de "ATIVO" para "NÃO".

- Fazendo com que, quando criarmos novos usuários, não ter difereça nos ID's. 
	Exemplo: Se tivessemos 3 usuários, e apagassemos 2, o ID iria começar contar a partir do 4, então do ID 1 pularia direto para o ID 4.

*/

?>


