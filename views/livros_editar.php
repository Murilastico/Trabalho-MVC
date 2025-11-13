<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alterar Livro</title>
    </head>
    <body>
        <h1>Editar Livro</h1>
        <form method="POST" action="index.php?acao=atualizar">
            <label>Título: <input type="text" name="titulo" value="<?htmlspecialchars($livro['titulo'])?>"></label>
            <label>Autor: <input type="text" name="autor" value="<?htmlspecialchars($livro['autor'])?>"></label>
            <br>
            <button
                style="
                    margin: 5px;
                    padding: 10px;
                    border-radius: 30px;
                    border: 1;
                    background-color: #eee;
                ",
                type="submit">
                Atualizar
            </button>
            <button
                    style="
                        margin: 5px;
                        padding: 10px;
                        border-radius: 30px;
                        border: 1;
                        align-text: center;
                        background-color: #eee;
                    "
                >
                    <a 
                        style="
                            color: black;
                            text-decoration: none;
                        ",
                        href="index.php?acao=index"
                    >
                        Voltar
                    </a>
            </button>
        </form>
    </body>
</html>
