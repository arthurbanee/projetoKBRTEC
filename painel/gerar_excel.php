<?php

include('conexao.php');

$sqlSelect = "SELECT * FROM tb_cadastro_usuario ORDER BY ID_USUARIO ASC";

$resultSql = mysqli_query($conexao, $sqlSelect);

$html = "
    <table style='border-collapse: collapse; width: 100%;'>
        <thead>
            <tr style='background-color: #f2f2f2;'>
                <th style='border: 1px solid #ddd; padding: 8px; text-align: center;'>ID</th>
                <th style='border: 1px solid #ddd; padding: 8px; text-align: center;'>Usuario</th>
                <th style='border: 1px solid #ddd; padding: 8px; text-align: center;'>E-mail</th>
            </tr>
        </thead>
        <tbody>
	";

while ($linhas = mysqli_fetch_assoc($resultSql)) {
    $html .= "
            <tr>
                <td style='border: 1px solid #ddd; padding: 8px;'>$linhas[ID_USUARIO]</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$linhas[USUARIO]</td>
                <td style='border: 1px solid #ddd; padding: 8px;'>$linhas[EMAIL]</td>
            </tr>
    ";
}

$html .= "</tbody></table>";

$listaUsuarios = "Lista Usuarios - ".date("d-m-Y");	

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=$listaUsuarios.xls");


echo $html;

?>

