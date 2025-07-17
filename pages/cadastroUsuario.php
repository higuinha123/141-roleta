<?php
require_once '../controllers/usuarioController.php';

$acao = isset($_GET['acao']) ? $_GET['acao'] : '';
var_dump($_POST); 
// var_dump($_POST['interesses']); 

switch($acao)
{
    case 'cadastrar':

        $usuarioController = new usuarioController();
        $usuarioController->cadastrar(
            $_POST['nome'],
            $_POST['email'],
            $_POST['senha'],
            $_POST['cpf'],
            $_POST['opcoes'],
            $_POST['interesses']
        );
        break;

    default:
        include '../views/usuarioCadastro.php';
}
