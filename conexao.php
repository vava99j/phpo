<?php

$host = 'localhost';        
$usuario = 'root';         
$senha = 'root';                
$banco = 'phpo';            


$conn = new mysqli($host, $usuario, $senha, $banco);


if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} else {
    echo "Conexão realizada com sucesso!";
}
?>
