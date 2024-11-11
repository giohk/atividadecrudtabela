<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-
scale=1.0">

    <title>Crud Playlist</title>
</head>
<body>
<h1>Gerenciamento de Musicas</h1>
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
    
    <h2>Lista de Músicas</h2>

    <div>
        <?php include 'read.php'; ?> <!-- Inclui a lista de usuários -->
    </div>
</body>
</html>