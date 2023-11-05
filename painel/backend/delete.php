<?php

    if (!empty($_GET['id'])) {
        include_once('conexao.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM tb_cadastro_usuario WHERE ID_USUARIO=$id";

        $result = $conexao->query($sqlSelect);

        if ($result->num_rows > 0) {
            $sqlDelete = "DELETE FROM tb_cadastro_usuario WHERE ID_USUARIO=$id";
            $resultDelete = $conexao->query($sqlDelete);
        }
    }
    header('Location: ');

/*

Doc - 31/10

- Código para realizar a consulta no banco de dados e deletar caso a váriavel ID seja igual o ID do usuário selecionado.

- Porém, na página "painel.php" o href da linha 203 está dando 'The requested URL was not found on this server.' talvez algum diretório possa estar errado.


*/

?>



