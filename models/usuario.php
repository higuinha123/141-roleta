<?php

class Usuario
{
    private $conexao;
    private $table = "usuario";
    public $id;
    public $nome;
    public $cpf;
    public $email;
    public $senha;
    public $opcoes = [];
    public $interesses = [];


    public function __construct($bd)
    {
        $this->conexao = $bd;
    }

    public function cadastrar()
    {
        
        $query = "INSERT INTO {$this->table} (nome, cpf, email, senha) 
                VALUES ('{$this->nome}', '{$this->cpf}', '{$this->email}', '{$this->senha}')";
        
        if ($this->conexao->query($query)) {
            $usuario_id = $this->conexao->insert_id;

            
            foreach ($this->opcoes as $opcao_id) {
                foreach ($this->interesses as $interesse_id) {
                    $sql = "INSERT INTO usuario_opcoes (usuario_id, opcao_id, interesse_id) 
                            VALUES ('$usuario_id', '$opcao_id', '$interesse_id')";
                    $this->conexao->query($sql);
                }
            }

            return true;
        }

        return false;
    }

}
