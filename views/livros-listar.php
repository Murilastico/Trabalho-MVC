<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros Cadastrados</title>
</head>
<body>
    <h1>
        Livros Cadastrados
    </h1>
    <button
        style="
            margin: 5px;
            padding: 10px;
            border-radius: 30px;
            border: 1;
            background-color: #eee;
        "
    >
        <a 
            style="
                color: black;
                text-decoration: none;
            ",
            href="index.php?acao=form" 
        >
            Adicionar livro
        </a>
    </button>
    <br>
    <table border='1' cellpadding='5'>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($livros as $livro): ?>
            <tr>
                <td>
                    <?= $livro['id']?>
                </td>
                <td>
                    <?= htmlspecialchars($livro['titulo'])?>
                </td>
                <td>
                    <?= htmlspecialchars($livro['autor'])?>
                </td>
                <td>
                    <button
                        style="
                            margin: 5%;
                            padding: 10px;
                            border-radius: 30px;
                            border: 1;
                            width: 90%;
                            align-text: center;
                            background-color: #eee;
                        "
                    >
                        <a 
                            style="
                                color: black;
                                text-decoration: none;
                            ",
                            href="index.php?acao=editar&id=<?=$livro['id']?>"
                        >
                            Editar
                        </a>
                    </button>
                </td>
                <td>
                        <button
                            style="
                                margin: 5%;
                                padding: 10px;
                                border-radius: 30px;
                                border: 1;
                                width: 90%;
                                align-text: center;
                                background-color: red;
                            "
                        >
                            <a 
                                style="
                                    color: white;
                                    text-decoration: none;
                                ",
                            href="index.php?acao=deletar&id=<?=$livro['id']?>" 
                            onclick="return confirm('Você realmente deseja excluir esse livro?')"
                        >
                            Excluir
                        </a>
                    </button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
        
    <php>

    </php>
</body>
</html>