<?php

include('../painel/conexao.php');

$sqlSelect = "SELECT * FROM tb_cadastro_usuario";

$resultSelect = $conexao->query($sqlSelect);

if($resultSelect->num_rows > 0){
	$html = "<html>
				<head>
					<style>
						table{
							width: 100%;
							border-collapse: collapse;
							margin-bottom: 20px;
						}

						th,td{
							border: 1px solid #ddd;
							padding: 8px;
							text-align: center;
						}

						th{
							background-color: #F2F2F2;
						}
					</style>
				</head>
				<body>
					<table>
						<tr>
							<th>ID</th>
							<th>Usuário</th>
							<th>E-mail</th>
						</tr>";


    while ($linhas = $resultSelect->fetch_object()) {
        $html .= "<tr>";
        $html .= "<td>" . $linhas->ID_USUARIO . "</td>";
        $html .= "<td>" . $linhas->USUARIO . "</td>";
        $html .= "<td>" . $linhas->EMAIL . "</td>";
        $html .= "</tr>";
	}

	    $html .= "</table></body></html>";
}	
else{
	$html .= 'Nenhum dado registrado';
}

use Dompdf\Dompdf;

require_once '../dompdf/autoload.inc.php';

$dompdf = new Dompdf();

$dompdf->loadHtml($html);

$dompdf->set_option('defaultFont', 'sans');

$dompdf->setPaper('A4', 'portrait');

$dompdf->render();

$dompdf->stream();












?>