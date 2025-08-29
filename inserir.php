<?php

include 'conexao.php';

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];


$sql = "INSERT INTO users (nome, cpf, telefone) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param("sss", $nome, $cpf, $telefone);
    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Erro na preparação da consulta: " . $conn->error;
}

$conn->close();
?>
