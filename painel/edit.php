<?php
		include('conexao.php');

		$id = $_GET['ID_USUARIO'];
		
		$sqlSelect = "SELECT * FROM tb_cadastro_usuario WHERE ID_USUARIO=$id";

		$result = $conexao->query($sqlSelect);

		if($result->num_rows > 0)
		{
			while($user_data = mysqli_fetch_assoc($result))
			{
				$id_usuario = $user_data['ID_USUARIO'];
				$usuario = $user_data['USUARIO'];
				$email = $user_data['EMAIL'];
				$ativo = $user_data['ATIVO'];
			}
			print_r($usuario);

		}
		else
		{
			header('Location: mensagemcad.php');
		}

?>