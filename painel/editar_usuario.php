<?php
include('conexao.php');

$message = "";

if (isset($_POST['submit'])) {
    $id = $_POST['ID_USUARIO'];
    $usuario = $_POST['USUARIO'];
    $email = $_POST['EMAIL'];
    $senha = $_POST['SENHA'];

    $sqlUpdate = "UPDATE tb_cadastro_usuario SET USUARIO = '$usuario', EMAIL = '$email', SENHA = '$senha' WHERE ID_USUARIO = '$id'";
    mysqli_query($conexao, $sqlUpdate);

    $message = "<p style='color: green;'>Alteração realizada!</p>";
}

$idUsuario = isset($_POST['ID_USUARIO']) ? $_POST['ID_USUARIO'] : null;

if ($idUsuario) {
    $result = mysqli_query($conexao, "SELECT * FROM tb_cadastro_usuario WHERE ID_USUARIO = '$idUsuario'");
    $linhas = mysqli_fetch_array($result);
} else {
    // Trate a situação em que ID_USUARIO não está definido ou é inválido
    $message = "<p style='color: red;'>Erro: ID de usuário inválido ou não definido.</p>";
}

// Se precisar redirecionar após a alteração, você pode adicionar header('Location: ...');
?>