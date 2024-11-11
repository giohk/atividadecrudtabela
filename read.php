<?php
include 'conexao.php'; // Inclui o arquivo de conexão

$sql = "SELECT * FROM playlist"; // Consulta todos os usuários
$result = $conn->query($sql); // Executa a consulta

if ($result->num_rows > 0) { // Se há resultados
    echo "<table border='1'><tr><th>ID</th><th>nome</th><th>aritista</th><th>lancamento</th><th>genero</th><th>Ações</th></tr>";
    while ($row = $result->fetch_assoc()) { // Para cada usuário
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nome"] . "</td>
                <td>" . $row["aritista"] . "</td>
                <td>" . $row["lancamento"] . "</td>
                <td>" . $row["genero"] . "</td>
                <td>
                    <a href='update.php?id=" . $row["id"] . "'>Editar</a>
                    <a href='delete.php?id=" . $row["id"] . "'>Excluir</a>
                </td>
            </tr>";
    }
    echo "</table>"; // Fecha a tabela
} else {
    echo "Nenhuma música encontrada."; // Mensagem se não houver usuários
}

?>
