<?php
// Configurações para conectar ao banco de dados
 // Endereço do servidor OU (DEPENDENDO DA PORTA DO XAMP e DO BANCO DE DADOS)
    $servername = "localhost:3306";
    $username = "root"; // Usuário padrão
    $password = ""; // Senha padrão
    $dbname = "playlistmusic"; // Nome do banco de dados

// Conecta ao MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);
// Verifica se a conexão falhou
if ($conn->connect_error) {
    echo "Erro de conexão: " . $conn->connect_error; // Exibe mensagem de erro
} else {
    echo "";
}

?>