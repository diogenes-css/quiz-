<?php
include("conexao.php");

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cadastro (nome, senha) VALUES ('$nome', '$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>
