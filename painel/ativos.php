<?php

include('conexao.php');

$sqlSelect = "SELECT * FROM tb_cadastro_usuario WHERE ATIVO = 'SIM' ORDER BY ASC";

$result = mysqli_query($conexao, $sqlSelect);

?>