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
        $query = "INSERT INTO {$this->table} (nome, cpf, email, senha, data_nasc) values ('{$this->nome}', '{$this->cpf}','{$this->email}','{$this->senha}','{$this->data_nasc}');";
        return $this->conexao->query($query);
    }
}
