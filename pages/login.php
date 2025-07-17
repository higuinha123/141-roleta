<?php
require_once '../config/database.php'; // seu arquivo config.php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';
    
    var_dump($_POST['email']);
    var_dump($_POST['senha']);

    $banco = new Banco();
    $conexao = $banco->conectar();

    $sql = "SELECT id, nome, senha FROM usuario WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $resultado = $stmt->get_result();

if ($usuario = $resultado->fetch_assoc()) {
 
    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nome'] = $usuario['nome'];
        header("Location: ../index.php");
        exit;
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}

    $stmt->close();
    $banco->fecharConexao();
} else {
    // Se acessar direto, redireciona para o form
    header("Location: ../views/usuarioLogin.php");
    exit;
}
