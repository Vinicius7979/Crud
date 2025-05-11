<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="css/cadastrar.css">
</head>
<body>

<div class="container-formulario">
    <h3>Cadastro de Produtos</h3>

    <form action="cadastrar.php" method="POST">
        <label>Nome do Produto:</label>
        <input type="text" name="produto" required>

        <label>Descrição:</label>
        <textarea name="descricao"></textarea>

        <label>Preço:</label>
        <input type="number" name="preco" step="0.01" required>

        <label>Quantidade em estoque:</label>
        <input type="number" name="estoque" required>

        <label>Categoria:</label>
        <select name="categoria" required>
            <option value="">Selecione</option>
            <option>Eletrônicos</option>
            <option>Roupas</option>
            <option>Alimentos</option>
        </select>

        <button type="submit">Cadastrar Produto</button>
    </form>
</div>

</body>
</html>
