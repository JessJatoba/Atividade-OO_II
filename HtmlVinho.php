<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vinho</title>
</head>
<body>
    <h3>Cadastro de Vinho</h3>
    <form action="ClasseVinho.php" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br>
        
        <label for="tipo">Tipo:</label><br>
        <input type="text" id="tipo" name="tipo" required><br>
        
        <label for="safra">Safra:</label><br>
        <input type="number" id="safra" name="safra" required><br>
        
        <label for="preco">Preço:</label><br>
        <input type="number" step="0.01" id="preco" name="preco" required><br><br>
        
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>



