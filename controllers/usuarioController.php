<?php

require_once '../config/database.php';
require_once '../models/usuario.php';

class usuarioController{
  
    public function cadastrar($nome, $email, $senha, $cpf, $opcoes, $interesses)
    {
        $banco = new Banco();
        $conexao = $banco->conectar();

        $usuario = new Usuario($conexao);
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->senha = password_hash($senha, PASSWORD_DEFAULT);
        $usuario->cpf = $cpf;
        $usuario->opcoes = $opcoes;
        $usuario->interesses = $interesses;

        if($usuario->cadastrar())
        {
            $banco->fecharConexao();
            header('Location: ../views/usuarioCadastro.php?status=success');
        }else
        {
            echo "Erro ao cadastrar usuário";
        }
    }
    
}