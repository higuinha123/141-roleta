<?php
require_once '../controllers/usuarioController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

switch($acao)
{
    case 'cadastrar':
        $usuarioController = new usuarioController();
        $usuarioController->cadastrar($_POST['nome'], $_POST['email'], $_POST['senha'],$_POST['cpf'],$_POST['descricao']);
        break;
    default:
        include '../views/formCadastrarLivro.php';
}
