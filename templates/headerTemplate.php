<?php
session_start();
$nome = $_SESSION['usuario_nome'] ?? 'Usuário'; // 'Usuário' como fallback
?>
<header>
    <div class="logo">
        <img src="img/bLOGO_1-removebg-preview.png" alt="" class="by">
        <h1>By At Home</h1>
    </div>
    
    <?php if (!isset($_SESSION['usuario_id'])): ?>
        <div class="lastItems">
            <a href="views/usuarioLogin.php" class="btn">Entrar</a>
            <a href="views/usuarioCadastro.php" class="btn">Cadastrar</a>
            <div class="user-icon">
                <img src="img/Frame.png" alt="">
            </div>
        </div>
        <?php else: ?>
            <span>Olá, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?>!</span>
                <a href="pages/logout.php" class="btn">Sair</a>
                <?php endif; ?>
</header>
