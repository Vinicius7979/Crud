<?php
include 'conexao.php';
$result = mysqli_query($con, "SELECT * FROM produtos");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<div class="header">Lista de Produtos</div>

<div class="adicionar-container">
    <a href="formcadastrar.php"><button class="adicionar-btn">Adicionar Produto</button></a>
</div>

<div class="lista-produtos">
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <div class="produto">
            <div>
                <strong><?= htmlspecialchars($row['produto']) ?></strong><br>
                <?= htmlspecialchars($row['descricao']) ?><br>
                <b>Preço:</b> R$ <?= number_format($row['preco'], 2, ',', '.') ?> |
                <b>Estoque:</b> <?= $row['estoque'] ?> |
                <b>Categoria:</b> <?= htmlspecialchars($row['categoria']) ?>
            </div>
            <div class="botoes">
                <a href="formeditar.php?id=<?= $row['id'] ?>"><button>Editar</button></a>
                <a href="excluir.php?id=<?= $row['id'] ?>" onclick="return confirm('Tem certeza que deseja excluir?');"><button>Excluir</button></a>
            </div>
        </div>
    <?php endwhile; ?>
</div>

</body>
</html>
