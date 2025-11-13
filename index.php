<?php
    require_once __DIR__ . "/controllers/LivroController.php";

    $acao = $_GET['acao'] ?? 'index';
    switch($acao){
        case 'index':
            index();
            break;
        case 'deletar':
            deletar();
            break;
        case 'form':
            require __DIR__ ."/views/livros_form.php";
            break;
        case 'salvar':
            salvar();
            break;
        case 'editar':
            editar();
            break;
            case 'atualizar':
                atualizar();
                break;
        default:
            echo "Ação não encontrada";
    }
?>