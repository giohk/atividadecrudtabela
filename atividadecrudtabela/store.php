<?php

include 'conexao.php'; // Inclui o arquivo de conexão

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nome = $_POST['nome']; 
    $aritista = $_POST['aritista']; 
    $lancamento = $_POST['lancamento']; 
    $genero = $_POST['genero']; 
    $sql = "INSERT INTO usuarios (nome, aritista,lancamento,genero) VALUES ('$nome', '$aritista', '$lancamento', '$genero' )"; // Prepara a consulta
// Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}
?>