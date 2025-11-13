<?php
    require_once __DIR__ . "/../models/livro.php";

    function index()
    {
        $livros = listarLivros();
        require __DIR__ . "/../views/livros-listar.php";
        
    }
    function deletar()
    {
        if(!empty($_GET['id']))
        {
            excluirLivro($_GET['id']);
        }
        header("Location: index.php");
        exit;
    }

    function salvar()
    {
        if(!empty($_POST['titulo']) && !empty($_POST['autor']))
        {
            adicionarLivro($_POST['titulo'],$_POST['autor']);
        }
        header("Location: index.php");
        exit;
    }
    function editar()
    {
        if(!empty($_GET['id']))
        {
            buscarLivro($_GET['id']);
            require __DIR__ ."views/livros_editar.php";
        }
    }
    function atualizar()
    {
        if(!empty($_POST['titulo']) && !empty($_POST['autor']))
        {
            atualizarLivro($_GET['id'],$_POST['titulo'],$_POST['autor']);
        }
    }
?>