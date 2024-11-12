<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM playlist WHERE id=$id"; // Consulta o usuário
    $result = $conn->query($sql); // Executa a consulta
    $playlist = $result->fetch_assoc(); // Obtém os dados do usuário
}
// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome']; // Recebe o novo nome
    $artista = $_POST['artista']; // Recebe o novo email
    $lancamento = $_POST['lancamento']; // Recebe o nome
    $genero = $_POST['genero']; // Recebe o email
    $sql = "UPDATE playlist SET nome='$nome', artista='$artista', lancamento='$lancamento', genero='$genero' WHERE id=$id"; // Prepara a atualização
   
        if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-
scale=1.0">

    <title>Crud Playlist</title>
</head>
<body>
<h1>Atualização de Músicas</h1>
    <form action="store.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br>
        <label>Artista:</label>
        <input type="text" name="aritista" required>
        <br>
        <label>Lançamento:</label>
        <input type="date" name="lancamento" required>
        <br>
        <label>Gênero:</label>
        <input type="text" name="genero" required>
        <input type="submit" value="Adicionar música">
    </form>

    <hr>
    
    <a href="index.php">Cancelar</a>
</body>
</html>