<?php

require_once 'Crud.php';

class Usuario
{
    private $conexao;
    private $table = "usuario";
    public $id;
    public $nome;
    public $cpf;
    public $email;
    public $senha;
    public $data_nasc;

    public function __construct($bd)
    {
        $this->conexao = $bd;
    }

    public function getIdUsuario($id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = {$this->$id}";
        $resultado = $this->conexao->query($query);
        return $resultado->fetch_all(MSQLI_ASSOC);
    }

    public function cadastrar()
    {
        $query = "INSERT INTO {$this->table} (nome, cpf, email, senha, data_nasc) values ('{$this->nome}', '{$this->cpf}','{$this->email}','{$this->senha}','{$this->data_nasc}');";
        return $this->conexao->query($query);
    }
}
