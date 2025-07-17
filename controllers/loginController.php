<?php
/**
 * Controlador de Login
 * Sistema de Roleta - By At Home
 */

require_once '../config/database.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = trim($_POST['email'] ?? ''); // Pode ser email ou CPF
    $senha = $_POST['senha'] ?? '';
    
    // Validação básica dos campos
    if (empty($login) || empty($senha)) {
        header("Location: ../views/usuarioLogin.php?erro=campos");
        exit;
    }
    
    try {
        $banco = new Banco();
        $usuario = null;
        
        // Verificar se é email ou CPF
        if (filter_var($login, FILTER_VALIDATE_EMAIL)) {
            // É um email
            $usuario = $banco->buscarUsuarioPorEmail($login);
        } else {
            // É um CPF (remover formatação se houver)
            $cpf = preg_replace('/[^0-9]/', '', $login);
            if (strlen($cpf) === 11) {
                $usuario = $banco->buscarUsuarioPorCPF($cpf);
            }
        }
        
        if ($usuario) {
            // Verificar se a senha está correta
            if (password_verify($senha, $usuario['senha'])) {
                // Login bem-sucedido
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['usuario_nome'] = $usuario['nome'];
                $_SESSION['usuario_email'] = $usuario['email'];
                $_SESSION['usuario_cpf'] = $usuario['cpf'];
                $_SESSION['usuario_moedas'] = $usuario['moedas'];
                
                // Regenerar ID da sessão por segurança
                session_regenerate_id(true);
                
                // Redirecionar para a página principal
                header("Location: ../index.php");
                exit;
            } else {
                // Senha incorreta
                header("Location: ../views/usuarioLogin.php?erro=senha");
                exit;
            }
        } else {
            // Usuário não encontrado
            header("Location: ../views/usuarioLogin.php?erro=usuario");
            exit;
        }
        
    } catch (Exception $e) {
        // Log do erro (em produção, usar um sistema de log adequado)
        error_log("Erro no login: " . $e->getMessage());
        
        // Redirecionar com erro genérico
        header("Location: ../views/usuarioLogin.php?erro=sistema");
        exit;
        
    } finally {
        // Fechar conexão
        if (isset($banco)) {
            $banco->fecharConexao();
        }
    }
    
} else {
    // Se acessar direto via GET, redireciona para o formulário
    header("Location: ../views/usuarioLogin.php");
    exit;
}

/**
 * Função para validar CPF
 */
function validarCPF($cpf) {
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    
    if (strlen($cpf) != 11) {
        return false;
    }
    
    // Verificar se não é uma sequência de números iguais
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }
    
    // Validar dígitos verificadores
    for ($t = 9; $t < 11; $t++) {
        $d = 0;
        for ($c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    
    return true;
}
?>